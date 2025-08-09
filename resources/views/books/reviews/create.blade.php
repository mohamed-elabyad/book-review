<x-layout>
    <h1 class="mb-10 text-2xl">Add Review for {{$book->title}}</h1>

    <form method="POST" action="{{route('books.reviews.store', $book)}}" >
        @csrf

        <label for="review">Review</label>
        <textarea name="review" id="review" required class="input"></textarea>
        <x-error name='review' />

        <div class="mt-4">
            <label for="rating">Rating</label>

            <select name="rating" id="rating" class="input" required>
                <option value="">Select a Rating</option>
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
            </select>
        <x-error name='rating' />


        </div>

        <button type="submit" class="btn mt-6">Add Review</button>
    </form>
</x-layout>
