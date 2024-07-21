<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class referencias extends Model
{
    use HasFactory;

    protected $table = 'referencias';
    protected $primaryKey = 'id';

    const ID = 'id';
    const TITULO = 'titulo';
    const PATH = 'path';
    const ID_MEMBROS = 'IdMembros';
    const VIDEO_ID = 'videoId';
    const FOTO_ID = 'fotoId';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        self::TITULO,
        self::PATH,
        self::ID_MEMBROS,
        self::VIDEO_ID,
        self::FOTO_ID
    ];

    protected $hidden = [
        self::CREATED_AT,
        self::UPDATED_AT,
    ];

    public function getId()
    {
        return $this->getAttribute(self::ID);
    }

    public function getTitulo()
    {
        return $this->getAttribute(self::TITULO);
    }

    public function getPath()
    {
        return $this->getAttribute(self::PATH);
    }

    public function getIdMembros()
    {
        return $this->getAttribute(self::ID_MEMBROS);
    }

    public function getVideoId()
    {
        return $this->getAttribute(self::VIDEO_ID);
    }

    public function getFotoId()
    {
        return $this->getAttribute(self::FOTO_ID);
    }


}
