<?php

// PagesController.php

class ReviewsController 
    {

    public function home() {

        $reviews = review::findAll();
        view('reviews.index', compact('reviews'));

        }
    
        public function add()
        {

            view('reviews.add');
        }
        
        public function save()
        {
            
            $review = new Review;
            $review->setLecteurId($_POST['lecteurId']);
            $review->setArticleId($_POST['articleId']);
            $review->setNote($_POST['note']);
            $review->setCommentaire($_POST['commentaire']);
      
            $review->save();
    
            redirectTo('liste-reviews');
        }
        public function show($review)
        {
    
            $review = Review::findOne($review);
            view('review.show', compact('review'));
        }
    }