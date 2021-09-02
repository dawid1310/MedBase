<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Disease;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diseases = [
            [
                'name' => 'Krwiomocz',
                'danger' => 'mid',
                'description' => 'Obecność krwi w moczu, która najczęściej jest objawem nieprawidłowego funkcjonowania dróg moczowych.',
                'specialization_id' => 21
            
            ],
            [
                'name' => 'Bezmocz',
                'danger' => 'mid',
                'description' => 'Schorzenie układu moczowego, które wskazuje na zaburzenie jego czynności. Bezmocz to stan, w którym pacjent oddaje poniżej 100 ml moczu na dobę.',
                'specialization_id' => 21
            
            ],
            [
                'name' => 'Choroba wieńcowa',
                'danger' => 'hi',
                'description' => 'Choroba niedokrwienna serca, to zespół objawów, jakie zachodzą po niewystarczającym zaopatrzeniu komórek w tlen i substancje odżywcze.',
                'specialization_id' => 1
            
            ],
            [
                'name' => 'Niewydolność krążenia',
                'danger' => 'hi',
                'description' => 'Dolegliwością układu krążenia, w której układ krążenia nie częściowo traci swoją zdolność do zaopatrywania organizmu i narządów w tlen i substancje odżywcze, co wiąże się z ich niedokrwieniem.',
                'specialization_id' => 1
            
            ],
            [
                'name' => 'Jaskra',
                'danger' => 'mid',
                'description' => 'Choroba, która uszkadza nerw wzrokowy, stopniowo doprowadzając do pogorszenia i utraty wzroku.',
                'specialization_id' => 3
            
            ],
            [
                'name' => 'Jęczmień ',
                'danger' => 'low',
                'description' => 'Torbielowata infekcja powieki.',
                'specialization_id' => 3
            
            ],
            [
                'name' => 'Dyspareunia',
                'danger' => 'mid',
                'description' => 'Dysfunkcja seksualna, dla której charakterystyczny jest ból odczuwany podczas stosunku seksualnego. ',
                'specialization_id' => 4
            
            ],
            [
                'name' => 'Torbiel jajnika',
                'danger' => 'hi',
                'description' => 'Powstała w obrębie jajnika patologiczna przestrzeń odgraniczona od prawidłowej tkanki ścianą.',
                'specialization_id' => 4
            
            ],
            [
                'name' => 'Stany lękowe',
                'danger' => 'mid',
                'description' => 'Zaburzenia związane z nieprawidłowym funkcjonowaniem układu nerwowego.',
                'specialization_id' => 5
            
            ],
            [
                'name' => 'Schizofrenia',
                'danger' => 'hi',
                'description' => 'Zaburzenie psychiczne zaliczane do grupy psychoz, czyli stanów charakteryzujących się zmienionym chorobowo, nieadekwatnym postrzeganiem, przeżywaniem, odbiorem i oceną rzeczywistości.',
                'specialization_id' => 5
            
            ],
            [
                'name' => 'Zespół stresu pourazowego (PTSD)',
                'danger' => 'mid',
                'description' => 'Zaburzenie psychiatryczne, które może wystąpić u osób, które doświadczyły lub były świadkami traumatycznego zdarzenia, takiego jak klęska żywiołowa, poważny wypadek, akt terrorystyczny, wojna, gwałt lub inna brutalna napaść osobista.',
                'specialization_id' => 6
            
            ],
            [
                'name' => 'Autyzm',
                'danger' => 'mid',
                'description' => 'Przypadłość, która zaliczana jest do grupy symptomów zwanych wycofaniem, czyli unikaniem kontaktu ze światem zewnętrznym – z ludźmi i otoczeniem.',
                'specialization_id' => 6
            
            ],
            [
                'name' => 'Odmrożenia',
                'danger' => 'mid',
                'description' => 'Zmiany miejscowe wywołane działaniem niskiej temperatury, głównie powietrza atmosferycznego.',
                'specialization_id' => 7
            
            ],
            [
                'name' => 'Oparzenia',
                'danger' => 'mid',
                'description' => 'Uszkodzenia tkanek wywołane działaniem wysokiej temperatury. Każde działanie wysokiej temperatury na skórę, prowadzi do jej niszczenia oraz uszkodzenia tkanek głębokich.',
                'specialization_id' => 7
            
            ],
            [
                'name' => 'Skolioza',
                'danger' => 'low',
                'description' => 'Boczne skrzywienie kręgosłupa, będące trójpłaszczyznową deformacją kręgosłupa polegającą na bocznym wygięciu w płaszczyźnie czołowej, odchyleniu w płaszczyźnie strzałkowej oraz odcinkowej rotacji osiowej. ',
                'specialization_id' => 8
            
            ],
            [
                'name' => 'Osteoporoza',
                'danger' => 'mid',
                'description' => 'Patologiczne zredukowanie masy kości w odniesieniu do normy wieku, płci oraz rasy, prowadzące do nieprawidłowości w obrębie szkieletu.',
                'specialization_id' => 8
            
            ],
            [
                'name' => 'Zespół Aspergera',
                'danger' => 'mid',
                'description' => 'Łagodniejsza forma autyzmu dziecięcego, zaburzeniem rozwoju i funkcjonowania ośrodkowego układu nerwowego.',
                'specialization_id' => 9
            
            ],
            [
                'name' => 'Ospa wietrzna',
                'danger' => 'low',
                'description' => 'Choroba, która jest jedną z najbardziej zakaźnych przypadłości występujących u dzieci. Ospie towarzyszy gorączka i wysypka pęcherzykowa na skórze i błonach śluzowych.',
                'specialization_id' => 9
            
            ],
            [
                'name' => 'Alergia powietrznopochodna',
                'danger' => 'low',
                'description' => 'Zespół niepożądanych objawów klinicznych, które dotyczą różnych narządów, między innymi skóry. Objawy te powstają w wyniku reakcji immunologicznych po kontakcie z alergenem powietrznopochodnym.',
                'specialization_id' => 10
            
            ],
            [
                'name' => 'Alergia na jady owadów',
                'danger' => 'low',
                'description' => 'Zespół objawów klinicznych mających różne nasilenie, od odczynu miejscowego do reakcji anafilaktycznej. Alergia występuje po użądleniu osoby uczulonej (zwykle natychmiast). ',
                'specialization_id' => 10
            
            ],
            [
                'name' => 'Menopauza',
                'danger' => 'low',
                'description' => 'Czas w którym organizm dojrzałej kobiety stopniowo przechodzi ze stanu płodnego w bezpłodny.',
                'specialization_id' => 11
            
            ],
            [
                'name' => 'Choroba Cushinga',
                'danger' => 'mid',
                'description' => 'Swoisty typ nadczynności przedniego płata przysadki, doprowadzający wtórnie do rozrostu kory nadnerczy i wzmożonego wydzielania ich hormonu (kortyzolu).',
                'specialization_id' => 11
            
            ],
            [
                'name' => 'Cukrzyca typu 1',
                'danger' => 'mid',
                'description' => 'Jedna z etiopatogenetycznych postaci cukrzycy. U jej podłoża choroby leży przewlekły, autoimmunologiczny proces chorobowy prowadzący do powolnego zniszczenia produkujących insulinę komórek β wysp trzustkowych (wysepek Langerhansa) i w następstwie tego do utraty zdolności jej wydzielania.',
                'specialization_id' => 12
            
            ],
            [
                'name' => 'Cukrzyca typu 2',
                'danger' => 'mid',
                'description' => 'Choroba metaboliczna charakteryzująca się wysokim stężeniem glukozy we krwi oraz opornością na insulinę i względnym niedoborem insuliny.',
                'specialization_id' => 12
            
            ],
            [
                'name' => 'Choroba Parkinsona',
                'danger' => 'mid',
                'description' => 'Zwyrodnienie struktur mózgu o nieznanej dotąd przyczynie. Choroba Parkinsona u osób starszych polega na zaniku komórek dopaminergicznych, co powoduje wystąpienie charakterystycznych symptomów.',
                'specialization_id' => 13
            
            ],
            [
                'name' => 'Choroba Alzheimera',
                'danger' => 'mid',
                'description' => 'Choroba ta polega na zwyrodnieniu mózgu na skutek odkładania białek o patologicznej strukturze. To z kolei prowadzi do śmierci neuronów, a więc także zmniejszenia ilości produkowanych przez nie substancji przekaźnikowych.',
                'specialization_id' => 13
            
            ],
            [
                'name' => 'Zespół cieśni kanału nadgarstka',
                'danger' => 'low',
                'description' => 'Stan chorobowy powstały w wyniku długotrwałego ucisku nerwu pośrodkowego (łac. nervus medianus) biegnącego w kanale nadgarstka.',
                'specialization_id' => 14
            
            ],
            [
                'name' => 'Pylica płuc',
                'danger' => 'mid',
                'description' => 'Przewlekła choroba układu oddechowego, wywołana długotrwałym wdychaniem pyłów. Charakteryzuje się występowaniem przewlekłego zapalenia oskrzeli i postępowej rozedmy płuc, z czasem dochodzi do powstania serca płucnego i niewydolności krążenia.',
                'specialization_id' => 14
            
            ],
            [
                'name' => 'Grypa',
                'danger' => 'mid',
                'description' => 'ostra choroba zakaźna układu oddechowego wywołana zakażeniem wirusem grypy.',
                'specialization_id' => 15
            
            ],
            [
                'name' => 'Angina ',
                'danger' => 'low',
                'description' => 'Zapalenie gardła – w najczęstszym rozumieniu ostre zapalenie migdałków podniebiennych i błony śluzowej gardła, wywołane przez bakterie paciorkowce β-hemolizujące z grupy A[1]. Jest chorobą zakaźną przenoszoną drogą kropelkową.',
                'specialization_id' => 15
            
            ],
            [
                'name' => 'Rak trzustki',
                'danger' => 'ho',
                'description' => 'Rodzaj nowotworu, który jest bardzo trudny do wyleczenia.',
                'specialization_id' => 17
            
            ],
            [
                'name' => 'Czerniak',
                'danger' => 'hi',
                'description' => 'Nowotwór skóry i błon śluzowych, wywodzący się z melanocytów znamion barwnikowych lub niezmienionej skóry. ',
                'specialization_id' => 17
            
            ]

        ];

        foreach ($diseases as $disease) {
            Disease::create($disease);
        }
    }
}
