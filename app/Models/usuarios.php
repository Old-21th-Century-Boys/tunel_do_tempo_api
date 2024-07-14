<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';

    const ID = 'id';
    const NOME = 'nome';
    const EMAIL = 'email';
    const SENHA = 'senha';
    const UUID = 'uuid';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        self::ID,
        self::NOME,
        self::EMAIL,
        self::SENHA,
        self::UUID,
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

    public function getEmail()
    {
        return $this->getAttribute(self::EMAIL);
    }

    public function getSenha()
    {
        return $this->getAttribute(self::SENHA);
    }

    public function getUuid()
    {
        return $this->getAttribute(self::UUID);
    }

}
