<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

    public function calculate($shape, $calculation, $inputs) {
        switch ($shape) {
            case 'lingkaran':
                return $this->lingkaran($calculation, $inputs);
            case 'persegi_panjang':
                return $this->persegiPanjang($calculation, $inputs);
            case 'sama_kaki':
                return $this->segitigaSamaKaki($calculation, $inputs);
            case 'siku_siku':
                return $this->segitigaSikuSiku($calculation, $inputs);
            case 'sama_sisi':
                return $this->segitigaSamaSisi($calculation, $inputs);
        }
    }

    private function lingkaran($calculation, $inputs) {
        $radius = $inputs['radius'];
        if ($calculation == 'luas') {
            return pi() * $radius * $radius;
        } else {
            return 2 * pi() * $radius;
        }
    }

    private function persegiPanjang($calculation, $inputs) {
        $panjang = $inputs['panjang'];
        $lebar = $inputs['lebar'];
        if ($calculation == 'luas') {
            return $panjang * $lebar;
        } else {
            return 2 * ($panjang + $lebar);
        }
    }

    private function segitigaSamaKaki($calculation, $inputs) {
        $alas = $inputs['alas'];
        $tinggi = $inputs['tinggi'];
        $sisi = sqrt(pow($alas/2, 2) + pow($tinggi, 2));
        if ($calculation == 'luas') {
            return 0.5 * $alas * $tinggi;
        } else {
            return $alas + (2 * $sisi);
        }
    }

    private function segitigaSikuSiku($calculation, $inputs) {
        $alas = $inputs['alas'];
        $tinggi = $inputs['tinggi'];
        $sisi_miring = sqrt(pow($alas, 2) + pow($tinggi, 2));
        if ($calculation == 'luas') {
            return 0.5 * $alas * $tinggi;
        } else {
            return $alas + $tinggi + $sisi_miring;
        }
    }

    private function segitigaSamaSisi($calculation, $inputs) {
        $sisi = $inputs['sisi'];
        if ($calculation == 'luas') {
            return (sqrt(3) / 4) * pow($sisi, 2);
        } else {
            return 3 * $sisi;
        }
    }
}