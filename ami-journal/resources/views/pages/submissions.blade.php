<h1>Cikkek</h1>
  <ul>
      @foreach ($articles as $article)
          <li>{{ $article->title }}</li>
      @endforeach
  </ul>