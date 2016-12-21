<?php

class Al_quran
{
    private $harga = "Rp.35.000,-";

    public function tampilkan_harga()
    {
        return "Harga Al-Qur'an nya adalah : :  " . $this->harga;
    }
}
    $al_quran = new Al_quran;
    echo $al_quran->tampilkan_harga();
