<?php

    namespace App\Http\Controllers;

    class PagesController extends Controller{

        public function getIndex(){
            return view('pages.welcome');
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

