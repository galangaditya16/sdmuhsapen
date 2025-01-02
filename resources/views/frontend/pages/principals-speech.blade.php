@extends('frontend.layouts.app')
@section('content')
  <x-profile-menu-header title="Sambutan Kepala Sekolah" />
  <section class="w-10/12 xl:w-9/12 mx-auto my-10 md:my-20">
    <div class="space-y-8">
      <div class="md:float-left md:mr-10 mb-6 md:mb-4 w-full lg:w-[530px]">
        <img
          class="object-cover w-full md:h-[500px] lg:h-[615px] rounded-3xl"
          src="{{ asset('assets/images/teachers/grand-teacher.jpg')}}"
          alt="grand-teacher.jpg"
        >
      </div>
      <div class="prose max-w-none">
        <div class="mt-4 space-y-2">
          <p class="text-biru-tua text-4xl font-extrabold">Agung Rahmanto, S.H., M.Pd.</p>
          <p class="text-oren text-lg font-bold">Kepala SD Muhammadiyah Sapen</p>
        </div>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus obcaecati placeat illo maiores dolore minus quas harum maxime unde eos. Maiores explicabo quo culpa perspiciatis. Esse ut odit libero quisquam!
          Doloribus, perspiciatis perferendis, minima tempora voluptatum, quidem possimus quod voluptatibus ut sunt corrupti officiis ratione porro illo velit repellat nam quisquam aspernatur. Numquam, cupiditate sint amet tempora aliquid quibusdam distinctio?
          Rem ex maiores velit, voluptate, eius quia ipsum debitis quod, expedita error esse repellendus odio laboriosam! Alias, voluptatem similique deserunt, eius totam natus, aut commodi a tenetur impedit at voluptates.
        </p>

        <p>
          Sequi facilis eius numquam rerum modi vitae. Assumenda maiores corporis quia, eius quos beatae cum sapiente sit qui facilis accusantium quo ducimus soluta neque, velit corrupti architecto numquam animi doloremque?
          Unde, placeat laudantium? Doloremque assumenda sapiente velit ex. Architecto ex nihil ullam! Rerum esse fuga quia cum vero repellat, nobis nesciunt dignissimos voluptatem numquam ipsa fugiat, deserunt tempora iure dolorum!
        </p>

        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel, alias totam? Perferendis officia voluptatum culpa impedit explicabo ratione placeat alias facilis, vero exercitationem! Vitae itaque tenetur, aliquam totam blanditiis suscipit?
          Quia consequuntur obcaecati beatae quod rerum error laborum itaque explicabo quas consectetur. Quidem, recusandae, amet eos possimus sequi culpa adipisci et accusamus alias, labore fugit aperiam! Eum provident quas dignissimos.
          Ipsam, suscipit. Nam reiciendis inventore impedit quidem atque ut facere qui eius unde nisi incidunt tempora, tenetur officia obcaecati quia eos dolores distinctio, neque cumque voluptates rem! Pariatur, suscipit laudantium!
        </p>
      </div>

      <div class="clear-both pt-8">
        <img
          class="h-64 w-full object-cover rounded-3xl"
          src="{{ asset('assets/galeri/galery-1.jpeg') }}"
          alt="galeri-1.jpeg"
        >
      </div>
    </div>
  </section>
  @include('frontend.layouts.footer-working-hours')
@endsection
