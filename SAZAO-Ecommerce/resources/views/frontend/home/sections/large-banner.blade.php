<section id="wsus__large_banner">
    <div class="container">
        <div class="row">
            <div class="cl-xl-12">
                @if ($homepage_secion_banner_four->banner_one->status == 1)
                    <div class="wsus__monthly_top_banner_img">
                        <a class="wsus__large_banner_img"
                            href="{{ $homepage_secion_banner_four->banner_one->banner_url }}">
                            <img class="img-fluid w-100"
                                src="{{ asset($homepage_secion_banner_four->banner_one->banner_image) }}" alt="">
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
