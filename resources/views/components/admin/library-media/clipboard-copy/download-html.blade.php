<div class="my-3"><a href="{{ $media->getUrl() }}" title="{{ __('Download', [], $locale) }} {{ $file->getTranslation('name', $locale) }}" download="{{ $media->file_name }}">{!! $file->icon !!}<span class="mt-1 d-block small"><i class="fas fa-download fa-fw me-1"></i>{{ __('Download', [], $locale) }} {{ $file->getTranslation('name', $locale) }}</span></a></div>
