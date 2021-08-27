<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Specialization;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specializations = [
            [
                'specialization' => 'Kardiologia',
                'specification' => 'Dziedzina medycyny zajmująca się schorzeniami i wadami układu sercowo-naczyniowego (serca, aorty i mniejszych naczyń krwionośnych), ich rozpoznawaniem i leczeniem.',
            ],
            [
                'specialization' => 'Neurologia',
                'specification' => 'Dziedzina medycyny zajmująca się diagnostyką, leczeniem i profilaktyką chorób obwodowego układu nerwowego i ośrodkowego układu nerwowego.',
            ],
            [
                'specialization' => 'Okulistyka',
                'specification' => 'Dziedzina medycyny zajmująca się diagnostyką, leczeniem i profilaktyką chorób oczu.',
            ],
            [
                'specialization' => 'Ginekologia',
                'specification' => 'Dziedzina medycyny zajmująca się profilaktyką i leczeniem chorób żeńskiego układu płciowego.',
            ],
            [
                'specialization' => 'Psychiatria',
                'specification' => 'jedna z podstawowych specjalizacji medycznych, zajmująca się badaniem, zapobieganiem i leczeniem zaburzeń i chorób psychicznych.',
            ],
            [
                'specialization' => 'Psychologia',
                'specification' => 'nauka badająca mechanizmy i prawa rządzące psychiką oraz zachowaniami człowieka.',
            ],
            [
                'specialization' => 'Chirurgia',
                'specification' => 'Dziedzina medycyny zajmująca się leczeniem operacyjnym.',
            ],
            [
                'specialization' => 'Ortopedia',
                'specification' => 'Skupia się na diagnostyce i leczeniu operacyjnym i zachowawczym schorzeń, wad wrodzonych i nabytych, zapaleń, zakażeń, nowotworów oraz uszkodzeń i zmian pourazowych narządu ruchu: szkieletu, układu więzadłowo-stawowego oraz mięśni, nerwów i naczyń.',
            ],
            [
                'specialization' => 'Pediatria',
                'specification' => 'Dziedzina medycyny zajmująca się chorobami dziecięcymi, opieką nad dziećmi oraz ich rozwojem.',
            ],
            [
                'specialization' => 'Alergologia',
                'specification' => 'Dziedzina medycyny zajmująca się rozpoznawaniem i leczeniem schorzeń alergicznych, czyli takich, u podstaw których stoi zjawisko nadwrażliwości, zwłaszcza inicjowane przez mechanizmy immunologiczne.',
            ],
            [
                'specialization' => 'Endokrynologia',
                'specification' => 'Dziedzina medycyny zajmująca się zaburzeniami funkcji gruczołów wydzielania wewnętrznego (zaburzenia wydzielania hormonów), np. przysadki mózgowej, tarczycy, nadnerczy, jajników.',
            ],
            [
                'specialization' => 'Diabetologia',
                'specification' => 'Dziedzina medycyny zajmująca się leczeniem cukrzycy i jej powikłań, a także innych schorzeń związanych z zaburzeniami homeostazy glikemii.',
            ],
            [
                'specialization' => 'Geriatria',
                'specification' => 'Dziedzina medycyny zajmująca się schorzeniami wieku podeszłego.',
            ],
            [
                'specialization' => 'Medycyna pracy',
                'specification' => 'Dziedzina medycyny zajmująca się badanie wpływu środowiska pracy na pacjenta, diagnostyka, leczenie i profilaktyka chorób zawodowych.',
            ],
            [
                'specialization' => 'Medycyna rodzinna',
                'specification' => 'Dziedzina medycyny zajmująca się  kwestiami zagwarantowania wszystkim członkom rodziny, będącej pod opieką lekarza rodzinnego, kompleksowej opieki medycznej.',
            ],
            [
                'specialization' => 'Medycyna sportowa',
                'specification' => 'Interdyscyplinarna dziedzina wiedzy lekarskiej, obejmującą całość procesów dokonujących się w organizmie człowieka pod wpływem aktywności fizycznej lub jej braku.',
            ],
            [
                'specialization' => 'Onkologia',
                'specification' => 'Dziedzina medycyny zajmująca się schorzeniami nowotworowymi, ich rozpoznawaniem oraz leczeniem.',
            ],
            [
                'specialization' => 'Reumatologia',
                'specification' => 'Dziedzina medycyny zajmująca się schorzeniami reumatycznymi (metabolicznymi, zapalnymi, zwyrodnieniowymi) kości, stawów, a także ogólnoustrojowymi stanami zapalnymi tkanki łącznej, ich rozpoznawaniem, leczeniem oraz zapobieganiem.',
            ],
            [
                'specialization' => 'Seksuologia',
                'specification' => 'Dziedzina medycyny zajmująca się szeroko pojętą seksualnością człowieka: potrzebami seksualnymi, prawidłowym życiem seksualnym człowieka zarówno w sferze ciała, odczuwanymi uczuciami, relacjami z innymi ludźmi, a także resztą otaczającego świata.',
            ],
            [
                'specialization' => 'Toksykologia',
                'specification' => 'Dziedzina medycyny zajmująca się badaniem własności czynników toksycznych i negatywnymi skutkami ich oddziaływania na organizm.',
            ],
            [
                'specialization' => 'Urologia',
                'specification' => 'Dziedzina medycyny zajmująca się budową, fizjologią i schorzeniami układu moczowo-płciowego u mężczyzn oraz układu moczowego u kobiet, a częściowo również żeńskim układem płciowym (uroginekologia).',
            ],
        ];

        foreach ($specializations as $specialization) {
            Specialization::create($specialization);
        }
    }
}
