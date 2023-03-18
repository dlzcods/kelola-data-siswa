<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'data_siswa';
    
	protected $guarded = ['id'];
	/**
	 * @return mixed
	 */
	public function getGuarded() {
		return $this->guarded;
	}
	
	/**
	 * @param mixed $guarded 
	 * @return self
	 */
	public function setGuarded($guarded): self {
		$this->guarded = $guarded;
		return $this;
	}
}
