<div class="py-5 px-5 d-flex flex-column flex-md-row justify-content-around align-items-center" id="home_container">
    <div id="home_text">
        <p class="fs-3 fw-semibold">Hello, I'm</p>
        <br>
        {{-- Dynamic Name --}}
        <p class="fs-1 fw-bolder text-uppercase">{{ $profile->name ?? 'Update Name in DB' }}</p>
        <br>
        {{-- Dynamic Headline --}}
        <p class="fs-5 fw-normal">{{ $profile->headline ?? 'Update Headline' }}</p>
    </div>
    <div class="py-3" id="home_image">
        {{-- Dynamic Image --}}
        <img src="{{ $profile->hero_image_url }}" class="img-fluid rounded float-end" alt="profile picture" height="650" width="650">
    </div>
</div>

