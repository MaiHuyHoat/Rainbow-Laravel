<?php

namespace App\Http\Controllers\RainbowControllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Showtime;
use App\Models\Cinema;
use App\Models\MovieCategory;
use Illuminate\Database\Eloquent;



class cinemamovieController extends Controller
{   
    public function index()
    {
    $page='cinemamovie';
    $JsPage="";
    $now=now();
    $ListMovie = Movie::distinct()->where('tbl_movie.Deleted', 0)
    ->join('tbl_showtime as st', 'st.Movie_Id', '=', 'tbl_movie.Id')
    ->join('tbl_cinema', 'st.Cinema_Id', '=', 'tbl_cinema.Id')
    ->join('tbl_moviecategory', 'tbl_movie.MovieCategory_Id', '=', 'tbl_moviecategory.Id')
       ->whereBetween('dateshow', [now(), now()->addDays(7)])
    ->orderBy('tbl_movie.DateShow','desc', 'st.Start', 'desc')
    ->select('tbl_movie.*', 'tbl_moviecategory.name as Category')
    ->where(function ($query) use ($now) {
        $query->where('st.End', '>=', $now);
    })
       ->paginate(9);
       $ListCinema= DB::table('tbl_cinema')
       ->leftJoin('tbl_showtime', 'tbl_cinema.id', '=', 'tbl_showtime.cinema_id')
       ->groupBy('tbl_cinema.id','tbl_cinema.name')
       ->select('tbl_cinema.id', 'tbl_cinema.name', DB::raw('COUNT(tbl_showtime.cinema_id) as showtime_count'))
       ->get();
        return  view('rainbowViews.index', [
            'page' => $page,
            'JsPage'=>'home',
            'listMovie'=>$ListMovie,
            'listCinema'=>$ListCinema
        ])
        ->with('i', (request()->input('page',1)-1)*9);
      //  return response()->json($ListMovie,200);
}
public function Search(Request $request){
    $keySearch= $request->input('keySearch');
    $cinema=$request->input('cinema');
    $now=now();
$page='cinemamovie';
$JsPage="";
if($keySearch!==null&& $cinema==null){
    $ListMovie = Movie::distinct()->where('tbl_movie.Deleted', 0)
->join('tbl_showtime', 'tbl_movie.id', '=', 'tbl_showtime.movie_id')
->join('tbl_cinema', 'tbl_showtime.cinema_id', '=', 'tbl_cinema.id')
->join('tbl_moviecategory', 'tbl_movie.moviecategory_id', '=', 'tbl_moviecategory.id')
->select('tbl_movie.*', 'tbl_moviecategory.name as Category','tbl_cinema.Id as Cinema_Id')
->whereBetween('dateshow', [now(), now()->addDays(7)])
->orderBy('tbl_movie.DateShow','desc', 'tbl_showtime.Start')
->where(function ($query) use ($now) {
    $query->where('tbl_showtime.End', '>=', now());
})
    ->where('tbl_showtime.Cinema_Id', $cinema)
       ->paginate(9);   
}

else if($cinema!==null && $keySearch==null){
    $ListMovie = Movie::distinct()->where('tbl_movie.Deleted', 0)
->join('tbl_showtime', 'tbl_movie.id', '=', 'tbl_showtime.movie_id')
->join('tbl_cinema', 'tbl_showtime.cinema_id', '=', 'tbl_cinema.id')
->join('tbl_moviecategory', 'tbl_movie.moviecategory_id', '=', 'tbl_moviecategory.id')
->select('tbl_movie.*', 'tbl_moviecategory.name as Category','tbl_cinema.Id as Cinema_Id')
->whereBetween('dateshow', [now(), now()->addDays(7)])
->orderBy('tbl_movie.DateShow','desc', 'tbl_showtime.Start')
->where(function ($query) use ($now) {
    $query->where('tbl_showtime.End', '>=', now());
})
    ->where('tbl_showtime.Cinema_Id', $cinema)
       ->paginate(9); 
}
else{
    $ListMovie = Movie::distinct()->where('tbl_movie.Deleted', 0)
->join('tbl_showtime', 'tbl_movie.id', '=', 'tbl_showtime.movie_id')
->join('tbl_cinema', 'tbl_showtime.cinema_id', '=', 'tbl_cinema.id')
->join('tbl_moviecategory', 'tbl_movie.moviecategory_id', '=', 'tbl_moviecategory.id')
->select('tbl_movie.*', 'tbl_moviecategory.name as Category','tbl_cinema.Id as Cinema_Id')
->whereBetween('dateshow', [now(), now()->addDays(7)])
->orderBy('tbl_movie.DateShow','desc', 'tbl_showtime.Start', 'desc')
->where(function ($query) use ($now) {
    $query->where('tbl_showtime.End', '>=', now());
})
    ->where('tbl_showtime.Cinema_Id', $cinema)
       ->paginate(9); 
}
// $ListMovieCategory = MovieCategory::with(['movies'])->get();
$ListCinema= DB::table('tbl_cinema')
       ->leftJoin('tbl_showtime', 'tbl_cinema.id', '=', 'tbl_showtime.cinema_id')
       ->groupBy('tbl_cinema.id','tbl_cinema.name')
       ->select('tbl_cinema.id', 'tbl_cinema.name', DB::raw('COUNT(tbl_showtime.cinema_id) as showtime_count'))
       ->get();    
return  view('RainbowViews.index', [
    'page' => $page,
    'JsPage'=>$JsPage,
    'listMovie'=>$ListMovie,
    'listCinema'=>$ListCinema
])->with('i', (request()->input('page',1)-1)*9);
}
}