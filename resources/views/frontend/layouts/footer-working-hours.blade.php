<footer class="bg-biru-remaja text-white mt-5">
    <div class="w-full px-4 py-2 bg-biru-remaja">
        <div class="text-center">
          <p>
            <span class="text-sm text-white font-bold">
              Jam Kerja: 
            </span>
            <span class="text-sm text-white">
              {{ \App\Helpers\Untils::getWork()->working_hours ?? '00:00' }}
            </span>
          </p>
        </div>
    </div>
</footer>
