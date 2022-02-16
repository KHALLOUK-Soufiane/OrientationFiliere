<?php
namespace App\Http\Controllers;

use DB;
use App\Models\api1;
use App\Models\api2;
use App\Models\filiere;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $avgData = json_encode(DB::select('SELECT AVG(Analyse1) as `Analyse 1`, AVG(Algebre1) as `Algebre 1`, AVG(Electricite) as Electricite, AVG(Thermodynamique) as Thermodynamique, AVG(CHIMIE) as Chimie, AVG(Langues) as Langues, AVG(`ANALYSE 2`) as `Analyse 2`, AVG(ALGEBRE2) as `Algebre 2`, AVG(`MECANIQUE DU POINT`) as `Mecanique du point`, AVG(`PROCEDES DE FABRICATION`) as procedes, AVG(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, AVG(`TECHNIQUES D\'EXPRESSION`) as tech_exp, AVG(Analyse3) as analyse3, AVG(Algebre3) as algebre3, AVG(`MECANIQUE DU SOLIDE`) as mecaSol, AVG(ELECTROMAGNETISME) as electromagnetisme, AVG(ELECTRONIQUE) as electronique, AVG(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, AVG(`ANALYSE NUMERIQUE`) as analyse_num, AVG(`ALGORITHMIQUE & PROGRAMMATION`) as algo, AVG(`BASE DE LA CONCEPTION`) as conception, AVG(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, AVG(`TECHNIQUE DE DOCUMENTATION`) as technique, AVG(`DAO ET OUTILS DE MATLAB`) as dao from api1'));
        
        $avgDataGM = json_encode(DB::select('SELECT AVG(Analyse1) as `Analyse 1`, AVG(Algebre1) as `Algebre 1`, AVG(Electricite) as Electricite, AVG(Thermodynamique) as Thermodynamique, AVG(CHIMIE) as Chimie, AVG(Langues) as Langues, AVG(`ANALYSE 2`) as `Analyse 2`, AVG(ALGEBRE2) as `Algebre 2`, AVG(`MECANIQUE DU POINT`) as `Mecanique du point`, AVG(`PROCEDES DE FABRICATION`) as procedes, AVG(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, AVG(`TECHNIQUES D\'EXPRESSION`) as tech_exp, AVG(Analyse3) as analyse3, AVG(Algebre3) as algebre3, AVG(`MECANIQUE DU SOLIDE`) as mecaSol, AVG(ELECTROMAGNETISME) as electromagnetisme, AVG(ELECTRONIQUE) as electronique, AVG(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, AVG(`ANALYSE NUMERIQUE`) as analyse_num, AVG(`ALGORITHMIQUE & PROGRAMMATION`) as algo, AVG(`BASE DE LA CONCEPTION`) as conception, AVG(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, AVG(`TECHNIQUE DE DOCUMENTATION`) as technique, AVG(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="GM"'));
        $avgDataIAGI = json_encode(DB::select('SELECT AVG(Analyse1) as `Analyse 1`, AVG(Algebre1) as `Algebre 1`, AVG(Electricite) as Electricite, AVG(Thermodynamique) as Thermodynamique, AVG(CHIMIE) as Chimie, AVG(Langues) as Langues, AVG(`ANALYSE 2`) as `Analyse 2`, AVG(ALGEBRE2) as `Algebre 2`, AVG(`MECANIQUE DU POINT`) as `Mecanique du point`, AVG(`PROCEDES DE FABRICATION`) as procedes, AVG(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, AVG(`TECHNIQUES D\'EXPRESSION`) as tech_exp, AVG(Analyse3) as analyse3, AVG(Algebre3) as algebre3, AVG(`MECANIQUE DU SOLIDE`) as mecaSol, AVG(ELECTROMAGNETISME) as electromagnetisme, AVG(ELECTRONIQUE) as electronique, AVG(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, AVG(`ANALYSE NUMERIQUE`) as analyse_num, AVG(`ALGORITHMIQUE & PROGRAMMATION`) as algo, AVG(`BASE DE LA CONCEPTION`) as conception, AVG(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, AVG(`TECHNIQUE DE DOCUMENTATION`) as technique, AVG(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="IAGI"'));
        $avgDataGI = json_encode(DB::select('SELECT AVG(Analyse1) as `Analyse 1`, AVG(Algebre1) as `Algebre 1`, AVG(Electricite) as Electricite, AVG(Thermodynamique) as Thermodynamique, AVG(CHIMIE) as Chimie, AVG(Langues) as Langues, AVG(`ANALYSE 2`) as `Analyse 2`, AVG(ALGEBRE2) as `Algebre 2`, AVG(`MECANIQUE DU POINT`) as `Mecanique du point`, AVG(`PROCEDES DE FABRICATION`) as procedes, AVG(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, AVG(`TECHNIQUES D\'EXPRESSION`) as tech_exp, AVG(Analyse3) as analyse3, AVG(Algebre3) as algebre3, AVG(`MECANIQUE DU SOLIDE`) as mecaSol, AVG(ELECTROMAGNETISME) as electromagnetisme, AVG(ELECTRONIQUE) as electronique, AVG(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, AVG(`ANALYSE NUMERIQUE`) as analyse_num, AVG(`ALGORITHMIQUE & PROGRAMMATION`) as algo, AVG(`BASE DE LA CONCEPTION`) as conception, AVG(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, AVG(`TECHNIQUE DE DOCUMENTATION`) as technique, AVG(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="GI"'));
        $avgDataMSEI = json_encode(DB::select('SELECT AVG(Analyse1) as `Analyse 1`, AVG(Algebre1) as `Algebre 1`, AVG(Electricite) as Electricite, AVG(Thermodynamique) as Thermodynamique, AVG(CHIMIE) as Chimie, AVG(Langues) as Langues, AVG(`ANALYSE 2`) as `Analyse 2`, AVG(ALGEBRE2) as `Algebre 2`, AVG(`MECANIQUE DU POINT`) as `Mecanique du point`, AVG(`PROCEDES DE FABRICATION`) as procedes, AVG(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, AVG(`TECHNIQUES D\'EXPRESSION`) as tech_exp, AVG(Analyse3) as analyse3, AVG(Algebre3) as algebre3, AVG(`MECANIQUE DU SOLIDE`) as mecaSol, AVG(ELECTROMAGNETISME) as electromagnetisme, AVG(ELECTRONIQUE) as electronique, AVG(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, AVG(`ANALYSE NUMERIQUE`) as analyse_num, AVG(`ALGORITHMIQUE & PROGRAMMATION`) as algo, AVG(`BASE DE LA CONCEPTION`) as conception, AVG(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, AVG(`TECHNIQUE DE DOCUMENTATION`) as technique, AVG(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="MSEI"'));
        $avgDataGEM = json_encode(DB::select('SELECT AVG(Analyse1) as `Analyse 1`, AVG(Algebre1) as `Algebre 1`, AVG(Electricite) as Electricite, AVG(Thermodynamique) as Thermodynamique, AVG(CHIMIE) as Chimie, AVG(Langues) as Langues, AVG(`ANALYSE 2`) as `Analyse 2`, AVG(ALGEBRE2) as `Algebre 2`, AVG(`MECANIQUE DU POINT`) as `Mecanique du point`, AVG(`PROCEDES DE FABRICATION`) as procedes, AVG(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, AVG(`TECHNIQUES D\'EXPRESSION`) as tech_exp, AVG(Analyse3) as analyse3, AVG(Algebre3) as algebre3, AVG(`MECANIQUE DU SOLIDE`) as mecaSol, AVG(ELECTROMAGNETISME) as electromagnetisme, AVG(ELECTRONIQUE) as electronique, AVG(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, AVG(`ANALYSE NUMERIQUE`) as analyse_num, AVG(`ALGORITHMIQUE & PROGRAMMATION`) as algo, AVG(`BASE DE LA CONCEPTION`) as conception, AVG(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, AVG(`TECHNIQUE DE DOCUMENTATION`) as technique, AVG(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="GEM"'));

        $minDataGM = json_encode(DB::select('SELECT MIN(Analyse1) as `Analyse 1`, MIN(Algebre1) as `Algebre 1`, MIN(Electricite) as Electricite, MIN(Thermodynamique) as Thermodynamique, MIN(CHIMIE) as Chimie, MIN(Langues) as Langues, MIN(`ANALYSE 2`) as `Analyse 2`, MIN(ALGEBRE2) as `Algebre 2`, MIN(`MECANIQUE DU POINT`) as `Mecanique du point`, MIN(`PROCEDES DE FABRICATION`) as procedes, MIN(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, MIN(`TECHNIQUES D\'EXPRESSION`) as tech_exp, MIN(Analyse3) as analyse3, MIN(Algebre3) as algebre3, MIN(`MECANIQUE DU SOLIDE`) as mecaSol, MIN(ELECTROMAGNETISME) as electromagnetisme, MIN(ELECTRONIQUE) as electronique, MIN(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, MIN(`ANALYSE NUMERIQUE`) as analyse_num, MIN(`ALGORITHMIQUE & PROGRAMMATION`) as algo, MIN(`BASE DE LA CONCEPTION`) as conception, MIN(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, MIN(`TECHNIQUE DE DOCUMENTATION`) as technique, MIN(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="GM"'));
        $minDataIAGI = json_encode(DB::select('SELECT MIN(Analyse1) as `Analyse 1`, MIN(Algebre1) as `Algebre 1`, MIN(Electricite) as Electricite, MIN(Thermodynamique) as Thermodynamique, MIN(CHIMIE) as Chimie, MIN(Langues) as Langues, MIN(`ANALYSE 2`) as `Analyse 2`, MIN(ALGEBRE2) as `Algebre 2`, MIN(`MECANIQUE DU POINT`) as `Mecanique du point`, MIN(`PROCEDES DE FABRICATION`) as procedes, MIN(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, MIN(`TECHNIQUES D\'EXPRESSION`) as tech_exp, MIN(Analyse3) as analyse3, MIN(Algebre3) as algebre3, MIN(`MECANIQUE DU SOLIDE`) as mecaSol, MIN(ELECTROMAGNETISME) as electromagnetisme, MIN(ELECTRONIQUE) as electronique, MIN(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, MIN(`ANALYSE NUMERIQUE`) as analyse_num, MIN(`ALGORITHMIQUE & PROGRAMMATION`) as algo, MIN(`BASE DE LA CONCEPTION`) as conception, MIN(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, MIN(`TECHNIQUE DE DOCUMENTATION`) as technique, MIN(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="IAGI"'));
        $minDataGI = json_encode(DB::select('SELECT MIN(Analyse1) as `Analyse 1`, MIN(Algebre1) as `Algebre 1`, MIN(Electricite) as Electricite, MIN(Thermodynamique) as Thermodynamique, MIN(CHIMIE) as Chimie, MIN(Langues) as Langues, MIN(`ANALYSE 2`) as `Analyse 2`, MIN(ALGEBRE2) as `Algebre 2`, MIN(`MECANIQUE DU POINT`) as `Mecanique du point`, MIN(`PROCEDES DE FABRICATION`) as procedes, MIN(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, MIN(`TECHNIQUES D\'EXPRESSION`) as tech_exp, MIN(Analyse3) as analyse3, MIN(Algebre3) as algebre3, MIN(`MECANIQUE DU SOLIDE`) as mecaSol, MIN(ELECTROMAGNETISME) as electromagnetisme, MIN(ELECTRONIQUE) as electronique, MIN(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, MIN(`ANALYSE NUMERIQUE`) as analyse_num, MIN(`ALGORITHMIQUE & PROGRAMMATION`) as algo, MIN(`BASE DE LA CONCEPTION`) as conception, MIN(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, MIN(`TECHNIQUE DE DOCUMENTATION`) as technique, MIN(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="GI"'));
        $minDataMSEI = json_encode(DB::select('SELECT MIN(Analyse1) as `Analyse 1`, MIN(Algebre1) as `Algebre 1`, MIN(Electricite) as Electricite, MIN(Thermodynamique) as Thermodynamique, MIN(CHIMIE) as Chimie, MIN(Langues) as Langues, MIN(`ANALYSE 2`) as `Analyse 2`, MIN(ALGEBRE2) as `Algebre 2`, MIN(`MECANIQUE DU POINT`) as `Mecanique du point`, MIN(`PROCEDES DE FABRICATION`) as procedes, MIN(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, MIN(`TECHNIQUES D\'EXPRESSION`) as tech_exp, MIN(Analyse3) as analyse3, MIN(Algebre3) as algebre3, MIN(`MECANIQUE DU SOLIDE`) as mecaSol, MIN(ELECTROMAGNETISME) as electromagnetisme, MIN(ELECTRONIQUE) as electronique, MIN(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, MIN(`ANALYSE NUMERIQUE`) as analyse_num, MIN(`ALGORITHMIQUE & PROGRAMMATION`) as algo, MIN(`BASE DE LA CONCEPTION`) as conception, MIN(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, MIN(`TECHNIQUE DE DOCUMENTATION`) as technique, MIN(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="MSEI"'));
        $minDataGEM = json_encode(DB::select('SELECT MIN(Analyse1) as `Analyse 1`, MIN(Algebre1) as `Algebre 1`, MIN(Electricite) as Electricite, MIN(Thermodynamique) as Thermodynamique, MIN(CHIMIE) as Chimie, MIN(Langues) as Langues, MIN(`ANALYSE 2`) as `Analyse 2`, MIN(ALGEBRE2) as `Algebre 2`, MIN(`MECANIQUE DU POINT`) as `Mecanique du point`, MIN(`PROCEDES DE FABRICATION`) as procedes, MIN(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, MIN(`TECHNIQUES D\'EXPRESSION`) as tech_exp, MIN(Analyse3) as analyse3, MIN(Algebre3) as algebre3, MIN(`MECANIQUE DU SOLIDE`) as mecaSol, MIN(ELECTROMAGNETISME) as electromagnetisme, MIN(ELECTRONIQUE) as electronique, MIN(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, MIN(`ANALYSE NUMERIQUE`) as analyse_num, MIN(`ALGORITHMIQUE & PROGRAMMATION`) as algo, MIN(`BASE DE LA CONCEPTION`) as conception, MIN(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, MIN(`TECHNIQUE DE DOCUMENTATION`) as technique, MIN(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="GEM"'));

        $maxDataGM = json_encode(DB::select('SELECT MAX(Analyse1) as `Analyse 1`, MAX(Algebre1) as `Algebre 1`, MAX(Electricite) as Electricite, MAX(Thermodynamique) as Thermodynamique, MAX(CHIMIE) as Chimie, MAX(Langues) as Langues, MAX(`ANALYSE 2`) as `Analyse 2`, MAX(ALGEBRE2) as `Algebre 2`, MAX(`MECANIQUE DU POINT`) as `Mecanique du point`, MAX(`PROCEDES DE FABRICATION`) as procedes, MAX(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, MAX(`TECHNIQUES D\'EXPRESSION`) as tech_exp, MAX(Analyse3) as analyse3, MAX(Algebre3) as algebre3, MAX(`MECANIQUE DU SOLIDE`) as mecaSol, MAX(ELECTROMAGNETISME) as electromagnetisme, MAX(ELECTRONIQUE) as electronique, MAX(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, MAX(`ANALYSE NUMERIQUE`) as analyse_num, MAX(`ALGORITHMIQUE & PROGRAMMATION`) as algo, MAX(`BASE DE LA CONCEPTION`) as conception, MAX(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, MAX(`TECHNIQUE DE DOCUMENTATION`) as technique, MAX(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="GM"'));
        $maxDataIAGI = json_encode(DB::select('SELECT MAX(Analyse1) as `Analyse 1`, MAX(Algebre1) as `Algebre 1`, MAX(Electricite) as Electricite, MAX(Thermodynamique) as Thermodynamique, MAX(CHIMIE) as Chimie, MAX(Langues) as Langues, MAX(`ANALYSE 2`) as `Analyse 2`, MAX(ALGEBRE2) as `Algebre 2`, MAX(`MECANIQUE DU POINT`) as `Mecanique du point`, MAX(`PROCEDES DE FABRICATION`) as procedes, MAX(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, MAX(`TECHNIQUES D\'EXPRESSION`) as tech_exp, MAX(Analyse3) as analyse3, MAX(Algebre3) as algebre3, MAX(`MECANIQUE DU SOLIDE`) as mecaSol, MAX(ELECTROMAGNETISME) as electromagnetisme, MAX(ELECTRONIQUE) as electronique, MAX(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, MAX(`ANALYSE NUMERIQUE`) as analyse_num, MAX(`ALGORITHMIQUE & PROGRAMMATION`) as algo, MAX(`BASE DE LA CONCEPTION`) as conception, MAX(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, MAX(`TECHNIQUE DE DOCUMENTATION`) as technique, MAX(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="IAGI"'));
        $maxDataGI = json_encode(DB::select('SELECT MAX(Analyse1) as `Analyse 1`, MAX(Algebre1) as `Algebre 1`, MAX(Electricite) as Electricite, MAX(Thermodynamique) as Thermodynamique, MAX(CHIMIE) as Chimie, MAX(Langues) as Langues, MAX(`ANALYSE 2`) as `Analyse 2`, MAX(ALGEBRE2) as `Algebre 2`, MAX(`MECANIQUE DU POINT`) as `Mecanique du point`, MAX(`PROCEDES DE FABRICATION`) as procedes, MAX(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, MAX(`TECHNIQUES D\'EXPRESSION`) as tech_exp, MAX(Analyse3) as analyse3, MAX(Algebre3) as algebre3, MAX(`MECANIQUE DU SOLIDE`) as mecaSol, MAX(ELECTROMAGNETISME) as electromagnetisme, MAX(ELECTRONIQUE) as electronique, MAX(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, MAX(`ANALYSE NUMERIQUE`) as analyse_num, MAX(`ALGORITHMIQUE & PROGRAMMATION`) as algo, MAX(`BASE DE LA CONCEPTION`) as conception, MAX(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, MAX(`TECHNIQUE DE DOCUMENTATION`) as technique, MAX(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="GI"'));
        $maxDataMSEI = json_encode(DB::select('SELECT MAX(Analyse1) as `Analyse 1`, MAX(Algebre1) as `Algebre 1`, MAX(Electricite) as Electricite, MAX(Thermodynamique) as Thermodynamique, MAX(CHIMIE) as Chimie, MAX(Langues) as Langues, MAX(`ANALYSE 2`) as `Analyse 2`, MAX(ALGEBRE2) as `Algebre 2`, MAX(`MECANIQUE DU POINT`) as `Mecanique du point`, MAX(`PROCEDES DE FABRICATION`) as procedes, MAX(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, MAX(`TECHNIQUES D\'EXPRESSION`) as tech_exp, MAX(Analyse3) as analyse3, MAX(Algebre3) as algebre3, MAX(`MECANIQUE DU SOLIDE`) as mecaSol, MAX(ELECTROMAGNETISME) as electromagnetisme, MAX(ELECTRONIQUE) as electronique, MAX(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, MAX(`ANALYSE NUMERIQUE`) as analyse_num, MAX(`ALGORITHMIQUE & PROGRAMMATION`) as algo, MAX(`BASE DE LA CONCEPTION`) as conception, MAX(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, MAX(`TECHNIQUE DE DOCUMENTATION`) as technique, MAX(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="MSEI"'));
        $maxDataGEM = json_encode(DB::select('SELECT MAX(Analyse1) as `Analyse 1`, MAX(Algebre1) as `Algebre 1`, MAX(Electricite) as Electricite, MAX(Thermodynamique) as Thermodynamique, MAX(CHIMIE) as Chimie, MAX(Langues) as Langues, MAX(`ANALYSE 2`) as `Analyse 2`, MAX(ALGEBRE2) as `Algebre 2`, MAX(`MECANIQUE DU POINT`) as `Mecanique du point`, MAX(`PROCEDES DE FABRICATION`) as procedes, MAX(`ANALYSE DES CIRCUITS`) as analyse_des_circuits, MAX(`TECHNIQUES D\'EXPRESSION`) as tech_exp, MAX(Analyse3) as analyse3, MAX(Algebre3) as algebre3, MAX(`MECANIQUE DU SOLIDE`) as mecaSol, MAX(ELECTROMAGNETISME) as electromagnetisme, MAX(ELECTRONIQUE) as electronique, MAX(`TECHNIQUES D\'EXPRESSION II`) as tech_exp2, MAX(`ANALYSE NUMERIQUE`) as analyse_num, MAX(`ALGORITHMIQUE & PROGRAMMATION`) as algo, MAX(`BASE DE LA CONCEPTION`) as conception, MAX(`METALLURGIE ET THERMOCHIMIE`) as metallurgie, MAX(`TECHNIQUE DE DOCUMENTATION`) as technique, MAX(`DAO ET OUTILS DE MATLAB`) as dao from api1 WHERE filiere="GEM"'));

        
        return view('dashboard',["maxFiliere" => ['GM' => $maxDataGM, 'GEM'=>$maxDataGEM, 'GI'=>$maxDataGI, 'IAGI'=>$maxDataIAGI, 'MSEI'=>$maxDataMSEI], "minFiliere" => ['GM' => $minDataGM, 'GEM'=>$minDataGEM, 'GI'=>$minDataGI, 'IAGI'=>$minDataIAGI, 'MSEI'=>$minDataMSEI],"avgData" => $avgData, "avgFiliere" => ['GM' => $avgDataGM, 'GEM'=>$avgDataGEM, 'GI'=>$avgDataGI, 'IAGI'=>$avgDataIAGI, 'MSEI'=>$avgDataMSEI]]);
    }
}
