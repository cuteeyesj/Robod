<?php
namespace Khalifa\MarketMakingBot\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MkmBots extends Model
{
    use HasFactory;

    // Disable Laravel's mass assignment protection
    protected $guarded = [];
}
