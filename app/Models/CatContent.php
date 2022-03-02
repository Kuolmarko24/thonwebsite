<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Storage;
use Cohensive\Embed\Facades\Embed;
class CatContent extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'title',
        'backgroundImage',
        'description',
        'videourl',
        'featured',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'category_id' => 'integer',
        'featured' => 'boolean',
    ];


    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    public static function boot()
{
    parent::boot();
    static::deleting(function($obj) {
        Storage::delete(Str::replaceFirst('storage/','public/', $obj->image));
    });
}

public function getVideoHtmlAttribute()
{
    $embed = Embed::make($this->video)->parseUrl();

    if (!$embed)
        return '';

    $embed->setAttribute(['width' => 400]);
    return $embed->getHtml();
}


public function setbackgroundImageAttribute($value)
{
    $attribute_name = "backgroundImage";
    // destination path relative to the disk above
    $destination_path = "public/catcontent";

    // if the image was erased
    if ($value==null) {
        // delete the image from disk
        Storage::delete($this->{$attribute_name});

        // set null in the database column
        $this->attributes[$attribute_name] = null;
    }

    // if a base64 was sent, store it in the db
    if (Str::startsWith($value, 'data:image'))
    {
        // 0. Make the image
        $image = Image::make($value)->encode('jpg', 90);

        // 1. Generate a filename.
        $filename = md5($value.time()).'.jpg';

        // 2. Store the image on disk.
        Storage::put($destination_path.'/'.$filename, $image->stream());

        // 3. Delete the previous image, if there was one.
        Storage::delete(Str::replaceFirst('storage/','public/', $this->{$attribute_name}));

        // 4. Save the public path to the database
        // but first, remove "public/" from the path, since we're pointing to it
        // from the root folder; that way, what gets saved in the db
        // is the public URL (everything that comes after the domain name)
        $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
        $this->attributes[$attribute_name] = $public_destination_path.'/'.$filename;
    }
}
}
