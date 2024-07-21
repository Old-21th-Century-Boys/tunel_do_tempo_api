<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historias extends Model
{
    use HasFactory;

    protected $table = 'historias';
    protected $primaryKey = 'id';

    const ID = 'id';
    const TITULO = 'titulo';
    const PATH = 'path';
    const ID_MEMBROS = 'idMembros';
    const FOTO_ID = 'fotoId';
    const VIDEO_ID = 'videoId';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';

    protected $fillable = [
        self::TITULO,
        self::PATH,
        self::ID_MEMBROS,
        self::FOTO_ID,
        self::VIDEO_ID
    ];

    protected $hidden = [
        self::CREATED_AT,
        self::UPDATED_AT,
        self::DELETED_AT,
    ];

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

    public function getFotoId()
    {
        return $this->getAttribute(self::FOTO_ID);
    }

    public function getVideoId()
    {
        return $this->getAttribute(self::VIDEO_ID);
    }


}
