<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historiasParalelas extends Model
{
    use HasFactory;

    protected $table = 'historias_paralelas';
    protected $primaryKey = 'id';

    const ID = 'id';
    const TITULO = 'titulo';
    const PATH = 'path';
    const ID_MEMBROS = 'idMembros';
    const FOTO_ID = 'fotoId';
    const VIDEO_ID = 'videoId';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        self::ID,
        self::TITULO,
        self::PATH,
        self::ID_MEMBROS,
        self::FOTO_ID,
        self::VIDEO_ID
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

    public function getFotoId()
    {
        return $this->getAttribute(self::FOTO_ID);
    }

    public function getVideoId()
    {
        return $this->getAttribute(self::VIDEO_ID);
    }
    
}
