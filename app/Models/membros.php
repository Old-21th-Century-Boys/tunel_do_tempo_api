<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membros extends Model
{
    use HasFactory;

    protected $table = 'membros';
    protected $primaryKey = 'id';

    const ID = 'id';
    const NOME = 'nome';
    const ANIVERSARIO = 'aniversario';
    const EMAIL = 'email';
    const FOTO_ID = 'fotoId';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        self ::ID,
        self::NOME,
        self::ANIVERSARIO,
        self::EMAIL,
        self::FOTO_ID,
    ];

    protected $hidden = [
        self::CREATED_AT,
        self::UPDATED_AT,
    ];

    public function getId()
    {
        return $this->getAttribute(self::ID);
    }
    
    public function getNome()
    {
        return $this->getAttribute(self::NOME);
    }

    public function getAniversario()
    {
        return $this->getAttribute(self::ANIVERSARIO);
    }

    public function getEmail()
    {
        return $this->getAttribute(self::EMAIL);
    }

    public function getFotoId()
    {
        return $this->getAttribute(self::FOTO_ID);
    }

}
