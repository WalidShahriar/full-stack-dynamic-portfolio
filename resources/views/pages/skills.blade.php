<div class="py-5 px-5 bg-dark" id="skillset_container">
    <div class="rounded-3 bg-white py-5 px-5" data-bs-theme="light">
        <h2 class="display-6 fw-normal mb-5 border-bottom pb-4">My Skill Set</h2>
        <div class="row">

            {{-- Technical Skills Column --}}
            <div class="col-md-6 mb-4 mb-md-0 border-end-md">
                <h4 class="text-primary mb-4 fs-2">Technical Expertise</h4>

                @foreach($techSkills as $skill)
                <div class="mb-4">
                    <strong class="d-block text-dark fs-3">{{ $skill->category }}</strong>
                    <p class="text-muted fs-4 fw-normal">{{ $skill->items }}</p>
                </div>
                @endforeach
            </div>

            {{-- Soft Skills Column --}}
            <div class="col-md-6 ps-md-5">
                <h4 class="text-success mb-4 fs-2">Professional & Soft Skills</h4>

                @foreach($softSkills as $skill)
                <div class="mb-4">
                    <strong class="d-block text-dark fs-3">{{ $skill->category }}</strong>

                    {{-- We use 'list-unstyled' to remove default bullet points --}}
                    <ul class="list-unstyled text-muted fs-4 fw-normal mt-2">

                        {{-- 1. Split the long string by Comma (,) --}}
                        @foreach(explode(',', $skill->items) as $item)

                            <li class="mb-2">
                                @php
                                    // 2. Split the item by Colon (:) to get Title and Value
                                    // We use 'pad' to prevent errors if a colon is missing
                                    $parts = explode(':', $item, 2);
                                    $title = trim($parts[0] ?? $item);
                                    $value = trim($parts[1] ?? '');
                                @endphp

                                {{-- If there is a value, bold the title. Otherwise just show text --}}
                                @if($value)
                                    <strong>{{ $title }}:</strong> {{ $value }}
                                @else
                                    {{ $title }}
                                @endif
                            </li>

                        @endforeach

                    </ul>
                </div>
                @endforeach
            </div>

        </div>
    </div>
</div>