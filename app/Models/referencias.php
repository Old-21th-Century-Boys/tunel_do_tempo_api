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
    const NOMES_MEMBROS = 'nomesMembros';
    const VIDEO_PATH = 'videoPath';
    const FOTO_PATH = 'fotoPath';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        self::TITULO,
        self::PATH,
        self::NOMES_MEMBROS,
        self::VIDEO_PATH,
        self::FOTO_PATH,
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

    public function getNomesMembros()
    {
        return $this->getAttribute(self::NOMES_MEMBROS);
    }

    public function getVideoPath()
    {
        return $this->getAttribute(self::VIDEO_PATH);
    }

    public function getFotoPath()
    {
        return $this->getAttribute(self::FOTO_PATH);
    }


}
