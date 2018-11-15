<?php

    namespace App\Http\Controllers;

    use App\News;

    class PagesController extends Controller{

        public function getIndex(){
            
            $news=News::orderBy('created_at','desc')->limit(4)->get();
            return view('pages.welcome')->withNews($news);
        }

        public function getNews(){
            return view('pages.news');
        }

        public function getNotes(){
            return view('pages.notes');
        }

        public function getProjects(){
            return view('pages.projects');
        }

        public function getJobs(){
            return view('pages.jobs');
        }

        public function getQuestions(){
            return view('pages.questions');
        }

        public function getContact(){
            return view('pages.contact');
        }
    }

