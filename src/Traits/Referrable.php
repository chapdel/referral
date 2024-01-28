<?php

namespace Chapdel\Referral\src;

trait Referrable
{
    /**
     * Get the model associated with the referral.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function referrer()
    {
        return $this->belongsTo(config('referral.model'), config('referral.foreign_key'));
    }
}
