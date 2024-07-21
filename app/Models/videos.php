<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    use HasFactory;

    protected $table = 'videos';
    protected $primaryKey = 'id';

    const ID = 'id';
    const TITULO = 'titulo';
    const PATH = 'path';
    const ANO_VIDEO = 'anoVideo';
    const ID_MEMBROS = 'idMembros';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        self::TITULO,
        self::PATH,
        self::ANO_VIDEO,
        self::ID_MEMBROS
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

    public function getAnoVideo()
    {
        return $this->getAttribute(self::ANO_VIDEO);
    }

    public function getIdMembros()
    {
        return $this->getAttribute(self::ID_MEMBROS);
    }
}
