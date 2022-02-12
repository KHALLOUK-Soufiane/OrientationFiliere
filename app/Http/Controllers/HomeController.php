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

        return view('dashboard', ["avgData" => $avgData, "avgFiliere" => ['GM' => $avgDataGM, 'GEM'=>$avgDataGEM, 'GI'=>$avgDataGI, 'IAGI'=>$avgDataIAGI, 'MSEI'=>$avgDataMSEI]]);
    }
}
