@props(['email', 'size' => 100, 'rating' => 'pg'])

<img class="acme-component-gravatar" src="https://gravatar.com/avatar/{{ hash('sha256', strtolower(trim($email))) }}?size={{ $size }}&rating={{ $rating }}" />
