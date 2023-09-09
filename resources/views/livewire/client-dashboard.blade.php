<div class="text-content-dark relative min-h-[50vh]">

<!-- {{$vet}} -->
        <!-- VET ID : $client->vet_id -->

    <div class="text-center absolute inset-0 z-50" wire:loading.delay.longer>
        <img class="m-auto" src="{{url('/loading.gif')}}"/>
    </div>
    <div class="row setup-content  min-h-[70vh] flex flex-col {{ $currentStep != 1 ? 'hidden' : '' }}" id="step-4">

        <div class="flex justify-around relative">
            <progress value="100" max="100" style="
                position: absolute;
                top: calc(50% - .25rem);
                bottom: calc(50% - .25rem);
                left: auto;
                right: auto;
                height:0.5rem;
                width: calc(100% - 5rem);
                z-index: 0;
            ">
            </progress>
            <x-button.circle href="#step-1" label="1" style="aspect-ratio: 1/1; z-index:1;" class="rounded-full font-bold bg-primary-blue  ring ring-primary-blue hover:text-primary-blue text-gray-light" />
            <x-button.circle href="#step-2" label="2" style="aspect-ratio: 1/1; z-index:1;" class="rounded-full font-bold bg-primary-blue  ring ring-primary-blue hover:text-primary-blue text-gray-light" />
            <x-button.circle href="#step-3" label="3" style="aspect-ratio: 1/1; z-index:1;" class="rounded-full font-bold bg-primary-blue  ring ring-primary-blue hover:text-primary-blue text-gray-light" />
            <x-button.circle href="#step-4" label="4" style="aspect-ratio: 1/1; z-index:1;" class="rounded-full font-bold bg-primary-blue  ring ring-primary-blue hover:text-primary-blue text-gray-light" disabled="disabled" />
        </div>

        <h3 class="text-center text-xl my-4 p-4 font-bold text-white bg-primary-blue"> การลงทะเบียนเสร็จสมบูรณ์ </h3>
        <p class="text-center">
            ท่านได้รับสิทธิ์ รับคำปรึกษา <br>
            และเข้าร่วมโปรแกรม LOVE solution cat PLUS<br>
            โปรแกรมปกป้องสุนัขจากปรสิตร้ายที่อันตรายถึงชีวิต
        </p>
        <img class="my-4" src="{{url('/app-banner.png')}}"/>
        <p class="text-center">
            สามารถพา {{$client->pet_name}}<br>
            ขนาด {{$client->pet_weight}}<br>
            ไปรับคำปรึกษา
            และเข้าร่วมโปรแกรม LOVE solution cat PLUS<br>
            ได้ที่โรงพยาบาล/คลินิก {{$client->vet_id?App\Models\Vet::find($client->vet_id)->vet_name:'-'}}<br>
        </p>
        <p class="text-center text-sm text-secondary-red">
            กรุณากดรับสิทธิ์ขณะอยู่ที่คลินิกตามที่ลงทะเบียน <br>
            เพื่อโชว์หลักฐานการลงทะเบียนให้คลินิกรับทราบ <br>
            (รหัสมีอายุ 15 นาที)
        </p>

        <div class="py-2 text-center flex justify-center mt-auto" wire:loading.remove>
            <!-- <div></div> -->
            <!-- <x-button lg outline icon="chevron-left" primary
                wire:click="back(1)" type="button" label="Back" /> -->
            <x-button lg right-icon="chevron-right" primary class="bg-gradient-to-br from-gradient-start to-gradient-end rounded-2xl"
                wire:click="go(2)" type="button" label="กดเพื่อแสดงหลักฐาน" />
        </div>
        <div class="py-2 text-center flex justify-center mt-auto" wire:loading>
            กำลังเนินการ...
        </div>

    </div>

    <div class="row setup-content  min-h-[70vh] flex flex-col {{ $currentStep != 2 ? 'hidden' : '' }}" id="step-4">
        <div class="text-center my-8 p-4 rounded-3xl text-white bg-primary-blue">
            <p class="my-4 leading-relaxed text-2xl">
                รหัสจะมีอายุ 15 นาที <br>
                ท่านจะสามารถใช้งานได้<br>
            </p><p class="my-4 leading-relaxed text-2xl">
                กรุณากดรับสิทธิ์ขณะอยู่ที่คลินิก<br>
                หรือ โรงพยาบาลสัตว์<br>
                ที่ลงทะเบียนเท่านั้น
            </p>
            <p class="my-4 leading-relaxed text-2xl">
                มิฉะนั้น รหัส<br>
                จะไม่สามารถใช้งานได้ <br>
                หากมีข้อสงสัย ติดต่อ <br>
                <div class="flex flex-wrap justify-center gap-2 mt-4">
                    <x-button rounded class="m-2 p-2"  green href="https://line.me/ti/p/%40PetsSociety" label="Line : @PetsSociety" />
                    <x-button rounded class="m-2 p-2"  sky href="https://www.facebook.com/PetsSocietybyZoetis" label="facebook.com/PetsSocietybyZoetis" />
                </div>

            </p>
        </div>
        <div class="py-2 text-center flex justify-between mt-auto" wire:loading.remove>
            <!-- <div></div> -->
            <x-button lg outline icon="chevron-left"
                wire:click="go(1)" type="button" label="ยกเลิก" />
            <x-button lg right-icon="chevron-right" primary  class="bg-gradient-to-br from-gradient-start to-gradient-end rounded-2xl"
                wire:click="go(3)" type="button" label="กดเพื่อแสดงหลักฐาน" />
        </div>
        <div class="py-2 text-center flex justify-center mt-auto" wire:loading>
            กำลังเนินการ...
        </div>
    </div>

    <div class="row setup-content  min-h-[70vh] flex flex-col {{ $currentStep != 3 ? 'hidden' : '' }}" id="step-4">
        <h3 class="text-center text-xl my-4 pt-4 font-bold text-primary-blue"> กรุณากรอกรหัสคลินิก <br>หรือ โรงพยาบาลสัตว์ </h3>
        <p class="text-center mb-8">
            (สอบถามที่พนักงานของคลินิก)
        </p>
        
        @if ($status == -1)
            <div class="my-2">
                <x-badge negative label="รหัสคลินิก หรือ โรงพยาบาลสัตว์ ไม่ถูกต้อง" />
            </div>
        @endif
        <x-input wire:model="input_vet_id" label="รหัสคลินิก หรือ โรงพยาบาลสัตว์" placeholder="รหัสคลินิก หรือ โรงพยาบาลสัตว์"/>
        <div class="mt-2">

        @if ($status == -2)
            <div class="my-2">
                <x-badge negative label="จำเป็นต้องเลือกอย่างน้อย 1 ตัวเลือก" />
            </div>
        @endif
            @if($stockRemain<=0)
            <span class="p-2 block pointer-events-none opacity-50">
                <x-checkbox lg class="rounded-full" 
                    label="รับคำปรึกษาและเข้าร่วมโปรแกรม Super TRIO" description="ไม่สามารถเลือกได้" />
            </span>
            {{-- @else --}}
            {{-- <span class="p-2 block"><x-checkbox lg class="rounded-full" label="รับคำปรึกษาและเข้าร่วมโปรแกรม Super TRIO"
                    id="standard"    wire:model.lazy="offer_1" /></span> --}}
            @endif
            <span class="p-2 block"><x-checkbox lg class="rounded-full" label="รับสิทธิ์พิเศษเพิ่มเติม - เข้าโปรแกรม 1 เดือน"
                    id="extra_1"    wire:model.lazy="offer_2" /></span>
            <span class="p-2 block"><x-checkbox lg class="rounded-full" value=3 label="รับสิทธิ์พิเศษเพิ่มเติม - เข้าโปรแกรม {{ $offer_3?$offer_3:'3' }} เดือน"
                    id="extra_2"    wire:model.lazy="offer_3" /></span>
            @if ($offer_3)
                <span class="p-2 block">
                    <x-native-select label="ระยะเวลา" placeholder="เลือกระยะเวลา" 
                        :options="[
                            ['name' => '3 เดือน',  'id' => 3],
                            ['name' => '6 เดือน',  'id' => 6],
                            ['name' => '9 เดือน',  'id' => 9],
                            ['name' => '12 เดือน',  'id' => 12],
                            ['name' => '15 เดือน',  'id' => 15],
                            ['name' => '18 เดือน',  'id' => 18],
                            ['name' => '21 เดือน',  'id' => 21],
                            ['name' => '24 เดือน',  'id' => 24],
                            ['name' => '27 เดือน',  'id' => 27],
                            ['name' => '30 เดือน',  'id' => 30],
                            ]" 

                        option-label="name"
                        option-value="id"
                        wire:model="offer_3" />
                </span>
            @endif
            
        </div>
        <div class="py-2 text-center flex justify-center mt-auto" wire:loading.remove>
            <x-button lg right-icon="chevron-right" primary  class="bg-gradient-to-br from-gradient-start to-gradient-end rounded-2xl"
                wire:click="verifyVet" type="button" label="รับสิทธิ์" />
        </div>
        <div class="py-2 text-center flex justify-center mt-auto" wire:loading>
            กำลังเนินการ...
        </div>
    </div>


    <div class="row setup-content  min-h-[70vh] flex flex-col {{ $currentStep != 6 ? 'hidden' : '' }}" id="step-4">
        <p class="text-center mb-8">
            น้อง {{$client->pet_name}}<br>
            ขนาด {{$client->pet_weight}}<br>
            ไปรับคำปรึกษา และเข้าร่วมโปรแกรม LOVE solution cat PLUS<br>
            ที่ {{$client->vet_id?App\Models\Vet::find($client->vet_id)->vet_name:'-'}}<br>
        </p>
        <p class="text-center">
            รหัส
            <span class="text-center text-xl mb-8 p-4 font-bold text-white bg-primary-blue block">
                {{$client_code}}
            </span>
        </p>

    </div>

</div>
