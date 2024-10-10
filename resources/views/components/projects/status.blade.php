@php use App\ProjectStatus; @endphp
@props(['status'])
<span {{ $attributes->class(['rounded-full font-bold text-center uppercase py-[6px] px-[14px] text-[12px] tracking-wide',
    'text-[#1D8338] bg-[#C0F7B4]' => $status == ProjectStatus::Open,
    'text-[#881337] bg-[#fecdd3]' => $status == ProjectStatus::Closed,
    ]) }}
>
    {{ $status->label() }}
</span>
