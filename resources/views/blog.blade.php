@extends('layouts.index')
@section('header')
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('/img/home-bg-3.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>meow meow</h1>
            <span class="subheading">a little cat corner</span>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection
  <!-- Main Content -->
  @section('content')
    <div class="row">
      <div class="col-sm-12 col-md-12 mx-auto">
        <?php
        if(Auth::check()){
        ?>
        <center>
          <h1 style="text-align: center;">Post Management</h1>
          <br><br>
          <button class="btn btn-primary" onclick="openForm()">New Post</button><br>
        </center>
            <div class="chat-popup" id="myForm">
              <form name="my_form" id="contactForm" role="form" method="post" action="blog">
                @csrf
                <br><br>
                <h4 style="text-align: left;">Title*</h4>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Title</label>
                    <input name="title" type="text" class="form-control" placeholder="Title" id="title" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br>
                <h4 style="text-align: left;">Subtitle*</h4>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls">
                    <label>Subtitle</label>
                    <textarea name="subtitle" rows="5" class="form-control" placeholder="Subtitle" id="message" required data-validation-required-message="Please enter a subtitle."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br><h4 style="text-align: left;">Background Link*</h4>
                <div class="control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Background Link</label>
                    <input name="bglink" type="text" class="form-control" placeholder="Background Link" id="bglink" required data-validation-required-message="Please enter a background link">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br><h4 style="text-align: left;">Content*</h4><br>
                <textarea name="editor_contents" id="froala-editor"></textarea>
                <script>
                  new FroalaEditor('textarea#froala-editor')
                </script><br>
                <div id="success"></div>
                <center>
                  <button type="submit" class="btn btn-primary" id="sendMessageButton">Post</button>
                  <button class="btn btn-primary" style="background-color: red; border-style: none;" onclick=closeForm()>Cancel</button>
                </center>
              </form>
          <hr>
        <?php
          }
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8 col-md-10 mx-auto">
      @foreach($posts as $post)
        <div class="post-preview">
          <a href="blog/{{ $post->title }}/{{ $post->date_posted }}">
            <h2 class="post-title">
              {{ $post->title }}
            </h2>
            <h3 class="post-subtitle">
              {{ $post->subtitle }}
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">{{ $post->author }}</a>
            on {{ $post->date_posted }}</p>
        </div>
        <hr>
      @endforeach
        <hr>
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
    <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>
  @endsection
