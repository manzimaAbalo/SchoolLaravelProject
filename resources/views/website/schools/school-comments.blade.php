<!-- post comment html -->
<div id="commentArea" class="comment-area">
    <h2 class="comment-title">{{ $comments->count() }} Commentaires</h2>
    <div class="comment-area-inner">
        @foreach ($comments as $item)
            <ol>
                <li>
                    <figure class="comment-thumb">
                        <img src="assets/img/educator-img22.jpg" alt="">
                    </figure>
                    <div class="comment-content">
                        <div class="comment-header">
                            <h5 class="author-name">{{ $item->profile->nom }} {{ $item->profile->prenoms }}</h5>
                            <span class="post-on">{{ $item->created_at->diffForHumans() }}</span>
                        </div>
                        <p>
                            {{ $item->comment }}
                        </p>
                    </div>
                </li>

            </ol>

        @endforeach

    </div>
    @auth()
        @if (Auth::user()->role_id === 3)
            <div id="replyForm" class="comment-form-wrap">
                <h2 class="comment-title">Ajouter votre commentaire</h2>
                <p>Vous devez vous connectez pour commenter</p>
                <form class="comment-form" action="{{ route('school.comment.save') }}" method="POST" >
                    @csrf
                    <input type="hidden" name="school_id" value="{{ $school->id }}" >
                    <p class="full-width">
                        <label>Message*</label>
                        <textarea rows="9" name="comment" ></textarea>
                    </p>

                    <p class="full-width">
                        <input type="submit" name="submit" value="Envoyer">
                    </p>
                </form>
            </div>
        @endif
    @endauth
