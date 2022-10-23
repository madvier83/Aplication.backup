@extends("bab3/layouts/v_template")

@section('title', 'home')
@section('content')
    <div class="container flex mt-5 mb-5">
        <h1>Ini Adalah Halaman Home</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat tempora incidunt optio excepturi porro, omnis quam laborum mollitia ad minus repellat veniam aperiam fugit nam neque nesciunt amet perferendis molestias quia, sit nisi ullam. Pariatur assumenda error ipsa. Ipsum praesentium adipisci unde quasi, voluptatem qui aliquid impedit beatae delectus voluptate!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum repudiandae ratione aperiam nam vero veritatis mollitia odit alias iusto enim saepe similique, nesciunt quisquam nemo ullam reiciendis est amet perspiciatis?</p>

        <div class="text-center my-4">
            <img src="{{ asset("image/img1.png") }}" alt="img1" width="450px" class="rounded-sm shadow">
        </div>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In aliquid exercitationem amet. Doloribus in provident aliquam. Deserunt harum doloremque necessitatibus?</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum voluptas dolorum odio delectus sapiente, nihil perferendis soluta eaque, maxime, amet earum in fugiat aliquid labore deleniti quod aliquam sequi cum.</p>
    </div>
@endsection