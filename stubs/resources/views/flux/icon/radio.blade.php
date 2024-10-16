{{-- Credit: Heroicons (https://heroicons.com) --}}<?php switch ($variant): case ('outline'): ?>
<svg {{ $attributes->only($class) }} data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 7.5 16.5-4.125M12 6.75c-2.708 0-5.363.224-7.948.655C2.999 7.58 2.25 8.507 2.25 9.574v9.176A2.25 2.25 0 0 0 4.5 21h15a2.25 2.25 0 0 0 2.25-2.25V9.574c0-1.067-.75-1.994-1.802-2.169A48.329 48.329 0 0 0 12 6.75Zm-1.683 6.443-.005.005-.006-.005.006-.005.005.005Zm-.005 2.127-.005-.006.005-.005.005.005-.005.005Zm-2.116-.006-.005.006-.006-.006.005-.005.006.005Zm-.005-2.116-.006-.005.006-.005.005.005-.005.005ZM9.255 10.5v.008h-.008V10.5h.008Zm3.249 1.88-.007.004-.003-.007.006-.003.004.006Zm-1.38 5.126-.003-.006.006-.004.004.007-.006.003Zm.007-6.501-.003.006-.007-.003.004-.007.006.004Zm1.37 5.129-.007-.004.004-.006.006.003-.004.007Zm.504-1.877h-.008v-.007h.008v.007ZM9.255 18v.008h-.008V18h.008Zm-3.246-1.87-.007.004L6 16.127l.006-.003.004.006Zm1.366-5.119-.004-.006.006-.004.004.007-.006.003ZM7.38 17.5l-.003.006-.007-.003.004-.007.006.004Zm-1.376-5.116L6 12.38l.003-.007.007.004-.004.007Zm-.5 1.873h-.008v-.007h.008v.007ZM17.25 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Zm0 4.5a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z"/>
</svg>

        <?php break; ?>

    <?php case ('solid'): ?>
<svg {{ $attributes->only($class) }} data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M20.432 4.103a.75.75 0 0 0-.364-1.456L4.128 6.632l-.2.033C2.498 6.904 1.5 8.158 1.5 9.574v9.176a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V9.574c0-1.416-.997-2.67-2.429-2.909a49.017 49.017 0 0 0-7.255-.658l7.616-1.904Zm-9.585 8.56a.75.75 0 0 1 0 1.06l-.005.006a.75.75 0 0 1-1.06 0l-.006-.006a.75.75 0 0 1 0-1.06l.005-.005a.75.75 0 0 1 1.06 0l.006.005ZM9.781 15.85a.75.75 0 0 0 1.061 0l.005-.005a.75.75 0 0 0 0-1.061l-.005-.005a.75.75 0 0 0-1.06 0l-.006.005a.75.75 0 0 0 0 1.06l.005.006Zm-1.055-1.066a.75.75 0 0 1 0 1.06l-.005.006a.75.75 0 0 1-1.061 0l-.005-.005a.75.75 0 0 1 0-1.06l.005-.006a.75.75 0 0 1 1.06 0l.006.005ZM7.66 13.73a.75.75 0 0 0 1.061 0l.005-.006a.75.75 0 0 0 0-1.06l-.005-.006a.75.75 0 0 0-1.06 0l-.006.006a.75.75 0 0 0 0 1.06l.005.006ZM9.255 9.75a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75V10.5a.75.75 0 0 1 .75-.75h.008Zm3.624 3.28a.75.75 0 0 0 .275-1.025L13.15 12a.75.75 0 0 0-1.025-.275l-.006.004a.75.75 0 0 0-.275 1.024l.004.007a.75.75 0 0 0 1.025.274l.006-.003Zm-1.38 5.126a.75.75 0 0 1-1.024-.275l-.004-.006a.75.75 0 0 1 .275-1.025l.006-.004a.75.75 0 0 1 1.025.275l.004.007a.75.75 0 0 1-.275 1.024l-.006.004Zm.282-6.776a.75.75 0 0 0-.274-1.025l-.007-.003a.75.75 0 0 0-1.024.274l-.004.007a.75.75 0 0 0 .274 1.024l.007.004a.75.75 0 0 0 1.024-.275l.004-.006Zm1.369 5.129a.75.75 0 0 1-1.025.274l-.006-.004a.75.75 0 0 1-.275-1.024l.004-.007a.75.75 0 0 1 1.025-.274l.006.004a.75.75 0 0 1 .275 1.024l-.004.007Zm-.145-1.502a.75.75 0 0 0 .75-.75v-.007a.75.75 0 0 0-.75-.75h-.008a.75.75 0 0 0-.75.75v.007c0 .415.336.75.75.75h.008Zm-3.75 2.243a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75V18a.75.75 0 0 1 .75-.75h.008Zm-2.871-.47a.75.75 0 0 0 .274-1.025l-.003-.006a.75.75 0 0 0-1.025-.275l-.006.004a.75.75 0 0 0-.275 1.024l.004.007a.75.75 0 0 0 1.024.274l.007-.003Zm1.366-5.12a.75.75 0 0 1-1.025-.274l-.004-.006a.75.75 0 0 1 .275-1.025l.006-.004a.75.75 0 0 1 1.025.275l.004.006a.75.75 0 0 1-.275 1.025l-.006.004Zm.281 6.215a.75.75 0 0 0-.275-1.024l-.006-.004a.75.75 0 0 0-1.025.274l-.003.007a.75.75 0 0 0 .274 1.024l.007.004a.75.75 0 0 0 1.024-.274l.004-.007Zm-1.376-5.116a.75.75 0 0 1-1.025.274l-.006-.003a.75.75 0 0 1-.275-1.025l.004-.007a.75.75 0 0 1 1.025-.274l.006.004a.75.75 0 0 1 .275 1.024l-.004.007Zm-1.15 2.248a.75.75 0 0 0 .75-.75v-.007a.75.75 0 0 0-.75-.75h-.008a.75.75 0 0 0-.75.75v.007c0 .415.336.75.75.75h.008ZM17.25 10.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm1.5 6a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" clip-rule="evenodd"/>
</svg>

        <?php break; ?>

    <?php case ('mini'): ?>
<svg {{ $attributes->only($class) }} data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M17.45 3.473a.75.75 0 1 0-.4-1.446L5.313 5.265c-.84.096-1.671.217-2.495.362A2.212 2.212 0 0 0 1 7.816v7.934A2.25 2.25 0 0 0 3.25 18h13.5A2.25 2.25 0 0 0 19 15.75V7.816c0-1.06-.745-2-1.817-2.189a41.12 41.12 0 0 0-5.406-.59l5.673-1.564ZM16 9.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM14.5 16a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3Zm-9.26-5a.75.75 0 0 1 .75-.75H6a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V11Zm2.75-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H8a.75.75 0 0 0 .75-.75V11a.75.75 0 0 0-.75-.75h-.01Zm-1.75-1.5A.75.75 0 0 1 6.99 8H7a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75v-.01Zm3.583.42a.75.75 0 0 0-1.06 0l-.007.007a.75.75 0 0 0 0 1.06l.007.007a.75.75 0 0 0 1.06 0l.007-.007a.75.75 0 0 0 0-1.06l-.007-.008Zm.427 2.08A.75.75 0 0 1 11 12v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V12a.75.75 0 0 1 .75-.75h.01Zm-.42 3.583a.75.75 0 0 0 0-1.06l-.007-.007a.75.75 0 0 0-1.06 0l-.007.007a.75.75 0 0 0 0 1.06l.007.008a.75.75 0 0 0 1.06 0l.008-.008Zm-3.59.417a.75.75 0 0 1 .75-.75H7a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75v-.01Zm-1.013-1.484a.75.75 0 0 0-1.06 0l-.008.007a.75.75 0 0 0 0 1.06l.007.008a.75.75 0 0 0 1.061 0l.007-.008a.75.75 0 0 0 0-1.06l-.007-.007ZM3.75 11.25a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V12a.75.75 0 0 1 .75-.75h.01Zm1.484-1.013a.75.75 0 0 0 0-1.06l-.007-.007a.75.75 0 0 0-1.06 0l-.007.007a.75.75 0 0 0 0 1.06l.007.007a.75.75 0 0 0 1.06 0l.007-.007ZM7.24 13a.75.75 0 0 1 .75-.75H8a.75.75 0 0 1 .75.75v.01a.75.75 0 0 1-.75.75h-.01a.75.75 0 0 1-.75-.75V13Zm-1.25-.75a.75.75 0 0 0-.75.75v.01c0 .414.336.75.75.75H6a.75.75 0 0 0 .75-.75V13a.75.75 0 0 0-.75-.75h-.01Z" clip-rule="evenodd"/>
</svg>

        <?php break; ?>

    <?php case ('micro'): ?>
<svg {{ $attributes->only($class) }} data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M11.437 1.45a.75.75 0 0 1-.386.987L7.478 4H13a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h.736l6.713-2.937a.75.75 0 0 1 .988.386ZM12 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6.75 6.75a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm-.75 3a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm2.323-1.225a.75.75 0 1 1-.75-1.3.75.75 0 0 1 .75 1.3ZM7.3 9.75a.75.75 0 1 0 1.299.75.75.75 0 0 0-1.3-.75Zm-.549 1.5a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm-3.348-.75a.75.75 0 1 0 1.3-.75.75.75 0 0 0-1.3.75Zm.275-1.975a.75.75 0 1 1 .75-1.3.75.75 0 0 1-.75 1.3ZM12 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd"/>
</svg>

        <?php break; ?>

<?php endswitch; ?>
