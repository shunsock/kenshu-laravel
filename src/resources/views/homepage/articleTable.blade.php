<ul class="table_article">
    @foreach($articles as $article)
        <li class="card_article">
            <a href="#" class="card_article__anchor">
                <img
                    src="{{ $article->getImagePath() }}"
                    alt="{{ $article->getTitle() }}"
                    class="card_article__image"
                />
                <div class="card_article__description">
                    <h2 class="card_article__title">{{ $article->getTitle() }}</h2>
                    <p class="card_article__author">{{ $article->getAuthor() }}</p>
                    <p class="card_article__created_at">{{ $article->getCreatedAt() }}</p>
                    <p class="card_article__body">{{ $article->getBody() }}</p>
                </div>
            </a>
        </li>
    @endforeach
</ul>
