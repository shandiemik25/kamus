@extends('layouts.main')
@section('content')
  <div class="wrapper">
    <header style="color: black">English Dictionary</header>
    <div class="search">
      <input type="text" placeholder="Search a word" required spellcheck="false">
      <i class="fas fa-search"></i>
      <span class="material-icons">close</span>
    </div>
    <p class="info-text">Type any existing word and press enter to get meaning, example, synonyms, etc.</p>
    <ul>
      <li class="word">
        <div class="details">
          <p>__</p>
          <span>_ _</span>
        </div>
        <i class="fas fa-volume-up"></i>
      </li>
      <div class="content">
        <li class="meaning">
          <div class="details">
            <p>Meaning</p>
            <span>___</span>
          </div>
        </li>
        <li class="example">
          <div class="details">
            <p>Example</p>
            <span>___</span>
          </div>
        </li>
        <li class="synonyms">
          <div class="details">
            <p>Synonyms</p>
            <div class="list"></div>
          </div>
        </li>
      </div>
    </ul>
    <a href="{{ route('app-add') }}">Add Data</a>
  </div>

  <script src="script.js"></script>

@endsection