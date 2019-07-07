<?php

// PagesController.php

class ReviewsController 
    {

    

        public function add()
        {
            $reviews = Membre::findAll();
            view('reviews.add', compact('reviews'));
        }

        public function home() {

        $reviews = review::findAll();
        view('reviews.home', compact('reviews'));

        }
    

        
        public function save()
        {
            
            $review = new Review;
            $review->setId($_POST['id']);
            $review->setLecteurId($_POST['lecteurId']);
            $review->setArticleId($_POST['articleId']);
            $review->setNote($_POST['note']);
            $review->setCommentaire($_POST['commentaire']);
      
            $review->save();
    
            redirectTo('liste-reviews');
        }

    }