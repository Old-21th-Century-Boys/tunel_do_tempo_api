<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fotos extends Model
{
    use HasFactory;

    protected $table = 'fotos';
    protected $primaryKey = 'id';

    const ID = 'id';
    const TITULO = 'titulo';
    const PATH = 'path';
    const ID_MEMBROS = 'idMembros';
    const ANO_FOTO = 'anoFoto';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    const DELETED_AT = 'deleted_at';


    protected $fillable = [
        self::ID,
        self::TITULO,
        self::PATH,
        self::ID_MEMBROS,
        self::ANO_FOTO
    ];

    protected $hidden = [
        self::CREATED_AT,
        self::UPDATED_AT,
        self::DELETED_AT,
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

    public function getAnoFoto()
    {
        return $this->getAttribute(self::ANO_FOTO);
    }
 
}
