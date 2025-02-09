<div class="relative container-fluid p-4 w-full ">
    <div class="w-full grid grid-cols-4 gap-3">
        <div class="p-3 border border-gray-200 bg-white rounded-lg">
            <div class="h-full flex flex-wrap items-center">
                <div class="relative h-full w-full max-w-full flex-grow flex-1 justify-end">
                    <h6 class="uppercase mb-1 text-sm font-semibold text-red-700">Restock Now</h6>
                    <hr class="m-0 w-16 text-green-900">
                    <div class="flex gap-3 p-3">
                        <div class="ml-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-14 h-14" id="product">
                                <path fill="#c80000"
                                      d="M28 42H4a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1V43a1 1 0 0 0-1-1zM20 36h24a1 1 0 0 0 1-1V17a1 1 0 0 0-1-1H20a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1zM60 42H36a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1V43a1 1 0 0 0-1-1z">
                                </path>
                                <g fill="#4D4D4D">
                                    <path
                                        d="M29 36H3a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zM18.115 17.668a1.002 1.002 0 0 0 1.277.609L43.9 9.599a1 1 0 0 0 .609-1.277l-2.002-5.656a.998.998 0 0 0-.512-.568 1.01 1.01 0 0 0-.765-.041l-24.509 8.678a1.005 1.005 0 0 0-.609 1.277l2.003 5.656zM61 36H35a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1z">
                                    </path>
                                </g>
                                <g fill="#CCC">
                                    <path
                                        d="M49.04 11.091h4v2h-4zM55.04 11.091h2v2h-2zM51.035 5.22l.958 1.755-3.51 1.916-.959-1.756zM54.546 3.301l.958 1.756-1.756.958-.958-1.756zM48.48 15.287l3.512 1.917-.958 1.756-3.512-1.918zM53.744 18.16l1.756.96-.959 1.754-1.755-.958z">
                                    </path>
                                </g>
                                <path fill="#FFF"
                                      d="M19.02 52h-6.04A2.984 2.984 0 0 1 10 49.02c0-1.683 1.337-3.02 2.98-3.02h6.04A2.984 2.984 0 0 1 22 48.98c0 1.683-1.337 3.02-2.98 3.02zm-6.04-4a.98.98 0 0 0-.98.98c0 .581.439 1.02.98 1.02h6.04a.98.98 0 0 0 .98-.98c0-.581-.439-1.02-.98-1.02h-6.04zM51.02 52h-6.04A2.984 2.984 0 0 1 42 49.02c0-1.683 1.337-3.02 2.98-3.02h6.04A2.984 2.984 0 0 1 54 48.98c0 1.683-1.337 3.02-2.98 3.02zm-6.04-4a.98.98 0 0 0-.98.98c0 .581.439 1.02.98 1.02h6.04a.98.98 0 0 0 .98-.98c0-.581-.439-1.02-.98-1.02h-6.04zM35.02 26h-6.04A2.984 2.984 0 0 1 26 23.02c0-1.683 1.337-3.02 2.98-3.02h6.04A2.984 2.984 0 0 1 38 22.98c0 1.683-1.337 3.02-2.98 3.02zm-6.04-4a.98.98 0 0 0-.98.98c0 .581.439 1.02.98 1.02h6.04a.98.98 0 0 0 .98-.98c0-.581-.439-1.02-.98-1.02h-6.04z">
                                </path>
                                <path fill="#ec0000"
                                      d="M28 33a23.8 23.8 0 0 1-9-1.756V35a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1v-9.462C41.184 30.052 35.001 33 28 33zM12 59a23.8 23.8 0 0 1-9-1.756V61a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1v-9.462C25.184 56.052 19.001 59 12 59zM44 59a23.8 23.8 0 0 1-9-1.756V61a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1v-9.462C57.184 56.052 51.001 59 44 59z">
                                </path>
                                <path fill="#FFF" d="M37 30h4v2h-4zM21 56h4v2h-4zM53 56h4v2h-4z"></path>
                            </svg>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <h3 class="text-black-50">{{ count($restock_now_predict) ?? 0 }}</h3>
                        </div>
                    </div>
                    <div class="absolute bottom-0 right-0">
                        <div class="w-full flex justify-end">
                            <div wire:ignore x-data="{ showModal: false }" @keydown.window.escape="showModal = false">
                                <div class="h-auto">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="text-sm text-green-900"
                                            @click="showModal = !showModal" data-bs-target="#exampleModal">View Products
                                    </button>
                                </div>

                                <div x-cloak x-transition.opacity x-show="showModal"
                                     class="fixed inset-0 bg-black/50 z-1"></div>

                                <div x-cloak x-transition.duration.500ms x-show="showModal"
                                     class="fixed inset-0 z-50 grid place-content-center">
                                    <div @click.away="showModal = false"
                                         class="min-h-full rounded-xl min-w-[800px] bg-white items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                            <div class="modal-content overflow-y-auto" style="max-height: 500px">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Restock Now</h1>
                                                </div>
                                                <div class="mt-3">
                                                    <table class="table table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Stock</th>
                                                            <th scope="col">Low Stock Threshold</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col"
                                                                style="background-color:  rgb(209 213 219)!important;">
                                                                Anticipated Volume tomorrow
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @if (count($restock_now_predict) != 0)
                                                            @foreach ($restock_now_predict as $item)
                                                                <tr wire:key="{{ $item['id'] . 'pred' }}">
                                                                    <th scope="row">{{ $item['id'] }}</th>
                                                                    <td class=text-sm">{{ $item['title'] }}</td>
                                                                    <td>{{ $item['stock'] }}</td>
                                                                    <td>{{ $item['reserve'] }}</td>
                                                                    <td class="text-red-300">Low on Stock</td>
                                                                    <td
                                                                        style="background-color:  rgb(209 213 219)!important;">
                                                                        {{ $item['prediction']['prediction_report'][0]['predicted'] ?? 0 }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach

                                                        @endif

                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="w-full flex gap-2 pt-3 justify-end">
                                            <button type="button" class="btn btn-outline-secondary"
                                                    @click="showModal = false">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 border border-gray-200 bg-white rounded-lg">
            <div class="h-full flex flex-wrap items-center">
                <div class="relative h-full w-full max-w-full flex-grow flex-1 justify-end">
                    <h6 class="uppercase mb-1 text-sm font-semibold text-yellow-500">Restock Soon</h6>
                    <hr class="m-0 w-16 text-yellow-900">
                    <div class="flex gap-3 p-3">
                        <div class="ml-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="w-14 h-14"
                                 id="product">
                                <path fill="#FFFF00"
                                      d="M28 42H4a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1V43a1 1 0 0 0-1-1zM20 36h24a1 1 0 0 0 1-1V17a1 1 0 0 0-1-1H20a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1zM60 42H36a1 1 0 0 0-1 1v18a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1V43a1 1 0 0 0-1-1z">
                                </path>
                                <g fill="#4D4D4D">
                                    <path
                                        d="M29 36H3a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1zM18.115 17.668a1.002 1.002 0 0 0 1.277.609L43.9 9.599a1 1 0 0 0 .609-1.277l-2.002-5.656a.998.998 0 0 0-.512-.568 1.01 1.01 0 0 0-.765-.041l-24.509 8.678a1.005 1.005 0 0 0-.609 1.277l2.003 5.656zM61 36H35a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1z">
                                    </path>
                                </g>
                                <g fill="#CCC">
                                    <path
                                        d="M49.04 11.091h4v2h-4zM55.04 11.091h2v2h-2zM51.035 5.22l.958 1.755-3.51 1.916-.959-1.756zM54.546 3.301l.958 1.756-1.756.958-.958-1.756zM48.48 15.287l3.512 1.917-.958 1.756-3.512-1.918zM53.744 18.16l1.756.96-.959 1.754-1.755-.958z">
                                    </path>
                                </g>
                                <path fill="#FFF"
                                      d="M19.02 52h-6.04A2.984 2.984 0 0 1 10 49.02c0-1.683 1.337-3.02 2.98-3.02h6.04A2.984 2.984 0 0 1 22 48.98c0 1.683-1.337 3.02-2.98 3.02zm-6.04-4a.98.98 0 0 0-.98.98c0 .581.439 1.02.98 1.02h6.04a.98.98 0 0 0 .98-.98c0-.581-.439-1.02-.98-1.02h-6.04zM51.02 52h-6.04A2.984 2.984 0 0 1 42 49.02c0-1.683 1.337-3.02 2.98-3.02h6.04A2.984 2.984 0 0 1 54 48.98c0 1.683-1.337 3.02-2.98 3.02zm-6.04-4a.98.98 0 0 0-.98.98c0 .581.439 1.02.98 1.02h6.04a.98.98 0 0 0 .98-.98c0-.581-.439-1.02-.98-1.02h-6.04zM35.02 26h-6.04A2.984 2.984 0 0 1 26 23.02c0-1.683 1.337-3.02 2.98-3.02h6.04A2.984 2.984 0 0 1 38 22.98c0 1.683-1.337 3.02-2.98 3.02zm-6.04-4a.98.98 0 0 0-.98.98c0 .581.439 1.02.98 1.02h6.04a.98.98 0 0 0 .98-.98c0-.581-.439-1.02-.98-1.02h-6.04z">
                                </path>
                                <path fill="#FFFF40"
                                      d="M28 33a23.8 23.8 0 0 1-9-1.756V35a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1v-9.462C41.184 30.052 35.001 33 28 33zM12 59a23.8 23.8 0 0 1-9-1.756V61a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1v-9.462C25.184 56.052 19.001 59 12 59zM44 59a23.8 23.8 0 0 1-9-1.756V61a1 1 0 0 0 1 1h24a1 1 0 0 0 1-1v-9.462C57.184 56.052 51.001 59 44 59z">
                                </path>
                                <path fill="#FFF" d="M37 30h4v2h-4zM21 56h4v2h-4zM53 56h4v2h-4z"></path>
                            </svg>
                        </div>
                        <div class="w-full flex justify-center items-center">
                            <h3 class="text-black-50">{{ count($restock_soon_predict) ?? 0 }}</h3>
                        </div>
                        {{--                        @foreach ($this->restock_now as $item) --}}
                        {{--                            <div class=""> --}}
                        {{--                                <p class="text-gray-600 text-sm"> --}}
                        {{--                                    {{ $item->title }} --}}
                        {{--                                </p> --}}
                        {{--                            </div> --}}
                        {{--                        @endforeach --}}

                    </div>
                    <div class="absolute bottom-0 right-0">
                        <div class="w-full flex justify-end">
                            <div wire:ignore x-data="{ showModal: false }" @keydown.window.escape="showModal = false">
                                <div class="h-auto">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="text-sm text-yellow-900"
                                            @click="showModal = !showModal" data-bs-target="#exampleModal">View Products
                                    </button>
                                </div>

                                <div x-cloak x-transition.opacity x-show="showModal"
                                     class="fixed inset-0 bg-black/50 z-1"></div>

                                <div x-cloak x-transition.duration.500ms x-show="showModal"
                                     class="fixed inset-0 z-50 grid place-content-center">
                                    <div @click.away="showModal = false"
                                         class="min-h-full rounded-xl min-w-[800px] bg-white items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                            <div class="modal-content overflow-y-auto" style="max-height: 500px">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Restock
                                                        Soon</h1>
                                                </div>
                                                <div class="mt-3">
                                                    <table class="table">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Product</th>
                                                            <th scope="col">Stock</th>
                                                            <th scope="col">Low Stock Threshold</th>
                                                            <th scope="col">Status</th>
                                                            <th scope="col"
                                                                style="background-color:  rgb(209 213 219)!important;">
                                                                Anticipated Volume Tommorrow
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if (count($restock_soon_predict) != 0)
                                                            @foreach ($restock_soon_predict as $item)
                                                                <tr wire:key="{{ $item['id'] . 'pred' }}">
                                                                    <th scope="row">{{ $item['id'] }}</th>
                                                                    <td class=text-sm">{{ $item['title'] }}</td>
                                                                    <td>{{ $item['stock'] }}</td>
                                                                    <td>{{ $item['reserve'] }}</td>
                                                                    <td class="text-red-300">Low on Stock</td>
                                                                    <td
                                                                        style="background-color:  rgb(209 213 219)!important;">
                                                                        {{ $item['prediction']['prediction_report'][0]['predicted'] ?? 0 }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full flex gap-2 pt-3 justify-end">
                                            <button type="button" class="btn btn-outline-secondary"
                                                    @click="showModal = false">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 col-span-2 border border-gray-200 bg-white rounded-lg">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full max-w-full flex-grow flex-1">
                    <h6 class="uppercase mb-0 text-lg font-semibold text-blueGray-500">Inventory Stock Information</h6>
                    <div class="mt-1">
                        <p class="mb-1 text-gray-500 text-sm">Optimize inventory levels and prevent stockouts.</p>
                        <div class="mt-2 w-full flex justify-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                Generate Inventory Report
                            </button>

                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Inventory Report
                                                Generation for {{ $seller_name }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body overflow-y-auto" style="max-height: 600px">
                                            <div class="flex flex-col">
                                                <p class="font-semibold">Interpretation</p>
                                                <div>
                                                    <p><span class="font-semibold">DRP (Dynamic Reorder Point):</span>
                                                        DRP provides the trigger point: It calculates the stock level
                                                        (reorder point) at which a new order should be placed..</p>
                                                    <p><span class="font-semibold">Optimal Resupply Days:</span> Optimal
                                                        resupply days determine the timing: This concept focuses on how
                                                        many days before reaching the DRP you should ideally place an
                                                        order.</p>
                                                </div>
                                                <p class="font-semibold text-center text-red-500">This product is in
                                                    high demand
                                                    and
                                                    may sell out before your next resupply. </p>
                                            </div>
                                            <div class="flex justify-center">
                                                <div wire:loading wire:target="forecastresult">
                                                    <p class="text-teal-600 font-semibold text-base">Please wait, while
                                                        we are running your model...</p>
                                                </div>
                                            </div>

                                            <div wire:target="forecastresult" wire:loading.remove>
                                                <table class="table table-sm">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Name</th>
                                                        {{-- <th scope="col">SKU</th> --}}
                                                        <th scope="col">Unit Cost</th>
                                                        <th scope="col">Stock #</th>
                                                        <th scope="col">Inventory Value</th>
                                                        <th scope="col">Low Stock #</th>
                                                        <th scope="col">Lead Time</th>
                                                        <th scope="col">DRP</th>
                                                        <th scope="col">ORD</th>
                                                        <th scope="col">Status</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody class="table-group-divider">
                                                    @foreach ($forecastresultdata as $data)
                                                        <tr>
                                                            <th scope="row">{{ $data['id'] }}</th>
                                                            <td>{{ $data['title'] }}</td>
                                                            {{-- <td>{{ $data['slug'] }}</td> --}}
                                                            <td>{{ $data['price'] }}</td>
                                                            <td>{{ $data['stock'] }}</td>
                                                            <td>{{ floatval($data['stock'] ) * floatval( $data['price']) }}</td>
                                                            <td>{{ $data['reserve'] ?? 0 }}</td>
                                                            <td>{{ $lead_time['lead_time'] }}</td>
                                                            <td>{{ round( $data['drp'] ?? 0, 2) }}</td>
                                                            <td>{{ round( $data['ord'] ?? 0, 2)  }}</td>
                                                            <td>Reorder</td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="my-3">
                                                <div class="row justify-content-center w-full">
                                                     @if($showgenerate === 1)
                                                         <iframe title="iframe of pdf"
                                                                 src="{{ asset('report.pdf') }}" width="100%"
                                                                 height="600"
                                                                 id="myPdfIframe">
                                                             This browser does not support PDFs. Please download the PDF
                                                             to view it: <a
                                                                 href="{{ asset('report.pdf') }}">Download
                                                                 PDF</a>
                                                         </iframe>
                                                     @elseif($showgenerate === 2)
                                                         <iframe title="iframe of pdf"
                                                                 src="{{ asset('predict_report.pdf') }}" width="100%"
                                                                 height="600"
                                                                 id="myPdfIframe">
                                                             This browser does not support PDFs. Please download the PDF
                                                             to view it: <a
                                                                 href="{{ asset('predict_report.pdf') }}">Download
                                                                 PDF</a>
                                                         </iframe>
                                                     @else
                                                         <p class="text-center text-red-500">Plase wait until the Model loads</p>
                                                     @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                Close
                                            </button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                            <button type="button" class="btn btn-primary"
                                                    wire:click="generateStockReport"
                                            >Generate Stock
                                                Report
                                            </button>
                                            <button type="button" class="btn btn-primary"
                                                    wire:click="generateExportRestock"
                                            >Export Restock
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 p-3 border border-gray-200 bg-white rounded-lg">
        <div class="pb-2">
            <div class="flex items-center gap-1">
                <h4 class="mb-0 text-xl tracking-wide text-gray-600">Forecast : </h4>
                <h4 class="mb-0 text-xl tracking-wide text-gray-600">{{ $productselectedname }}</h4>
            </div>
            <div class="flex justify-end gap-2 items-center">
                <div class="flex gap-1.5 items-center">
                    <p class="mb-0 text-gray-600 text-xs tracking-tight">Total summary in</p>
                    <div class="btn-group btn-group-sm" role="group">
                        <button type="button" class="!font-medium btn btn-outline-primary dropdown-toggle "
                                data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $summary }}
                        </button>
                        <ul class="dropdown-menu !pl-0">
                            <li>
                                <button type="button" wire:click="summaryChange('Weekly')" class="dropdown-item"
                                        href="#">Weekly
                                </button>
                            </li>
                            <li>
                                <button type="button" wire:click="summaryChange('Monthly')" class="dropdown-item"
                                        href="#">Monthly
                                </button>
                            </li>
                            <li>
                                {{-- <button type="button" wire:click="$set('summary', 'Yearly')" class="dropdown-item" --}}
                                {{--     href="#">Custom --}}
                                {{-- </button> --}}
                                <!-- Button trigger modal -->
                                <button type="button" wire:click="summaryChange('Custom')" class="dropdown-item"
                                        data-bs-toggle="modal" data-bs-target="#custom_range_modal">
                                    Custom
                                </button>

                                <!-- Modal -->

                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Modal Body --}}
                <div class="modal fade" id="custom_range_modal" tabindex="-1" aria-labelledby="custom_range_modal"
                     aria-hidden="true" wire:ignore>
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="custom_range_modal">Custom Date Input</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                                </button>
                            </div>
                            <div class="modal-body">
                                <div>
                                    <p class="text-center font-bold">Today is {{ now()->format('Y-m-d') }}</p>
                                </div>
                                <div class="flex flex-column gap-3">
                                    <div>
                                        <label for="start_date"
                                               class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            <span class="text-red-600 text-xs">*</span>Starting Date</label>
                                        <input type="date" id="start_date"
                                               wire:model.live.debounce="userStartingDate"
                                               value="{{ $userStartingDate }}"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               required>
                                        @error('start_date')
                                        <span class="font-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="end_date"
                                               class="w-full block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                            <span class="text-red-600 text-xs">*</span>Ending Date
                                            <span class="text-red-600 text-xs">Defaults to the current
                                                day</span></label>
                                        <input type="date" id="end_date"
                                               wire:model.live.debounce="userEndingDate"
                                               value="{{ now()->format('Y-m-d') }}"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               required>
                                        @error('end_date')
                                        <span class="font-sm text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <h6 class="text-center">
                                        Or available Months of this year
                                    </h6>
                                    <div>
                                        @php
                                            $currentMonth = now()->month;
                                        @endphp

                                        <select class="form-select form-select-sm" id="monthselect"
                                                aria-label="Small select example"
                                                wire:model.live.debounce="monthSelect">
                                            <option value="0">Select Month</option>
                                            @for ($i = 1; $i <= $currentMonth; $i++)
                                                <option value="{{ $i }}">
                                                    {{ DateTime::createFromFormat('!m', $i)->format('F') }}
                                                </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                </button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{--                {{ $summary ?? '' }} --}}
                {{--                {{ $monthSelect ?? '' }} --}}
                {{--                {{ $userStartingDate ?? '' }} --}}
                {{--                {{ $userEndingDate ?? '' }} --}}

                <div class="btn-group btn-group-sm" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">
                        Select Product
                    </button>
                    <div class="dropdown-menu overflow-auto p-2 rounded-2 bg-white shadow max-h-96 w-96">
                        <div class="list-group">
                            <p class="mb-0 text-gray-600 text-sm font-bold">Recommended</p>
                            @foreach ($this->restock_now_list as $item)
                                <button class="list-group-item list-group-item-action" wire:key="{{ $item->id }}"
                                        wire:click="selectProduct({{ $item->id }})">
                                    <div class="flex gap-2">
                                        <p>{{ $item->id }}</p>
                                        <p>-</p>
                                        <p>{{ $item->title }}</p>
                                    </div>
                                </button>
                            @endforeach
                            @foreach ($this->restock_soon_list as $item)
                                <button class="list-group-item list-group-item-action" wire:key="{{ $item->id }}"
                                        wire:click="selectProduct({{ $item->id }})">
                                    <div class="flex gap-2">
                                        <p>{{ $item->id }}</p>
                                        <p>-</p>
                                        <p>{{ $item->title }}</p>
                                    </div>
                                </button>
                            @endforeach
                            <p class="mb-0 mt-2 text-gray-600 text-sm font-bold">Other Products</p>
                            @foreach ($this->all_products as $item)
                                <button class="list-group-item list-group-item-action" wire:key="{{ $item->id }}"
                                        wire:click="selectProduct({{ $item->id }})">
                                    <div class="flex gap-2">
                                        <p>{{ $item->id }}</p>
                                        <p>-</p>
                                        <p>{{ $item->title }}</p>
                                    </div>
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div x-data="{ openSearchProduct: false }" @mouseleave="openSearchProduct = false"
                     @mouseover="openSearchProduct = true">
                    <input class="form-control " type="search" placeholder="Search Product" autocomplete="off"
                           aria-label="Search Product" wire:model.live="search_product"
                           @input="event => openSearchProduct = true">
                    <div x-cloak x-show="openSearchProduct" class="absolute bg-white end-6 rounded-lg shadow"
                         x-transition:enter.duration.700ms x-transition:leave.duration.200ms style="z-index: 1020;">
                        <div class="overflow-auto p-2 rounded-2 bg-white shadow max-h-96 w-96">

                            @if (strlen($search_product) > 1)
                                @if (strlen($return_search_product) > 2)
                                    <div class="list-group">
                                        <p class="mb-0 text-gray-600 text-sm font-bold">Results</p>
                                        @foreach ($return_search_product as $item)
                                            <button class="list-group-item list-group-item-action"
                                                    wire:transition.scale.origin.top wire:key="{{ $item->id }}"
                                                    wire:click="selectProduct({{ $item->id }})">
                                                <div class="flex gap-2">
                                                    <p>{{ $item->id }}</p>
                                                    <p>-</p>
                                                    <p>{{ $item->title }}</p>
                                                </div>
                                            </button>
                                        @endforeach
                                    </div>
                                @else
                                    <p class="text-center" wire:key="no-results">
                                        No Product Found.</p>
                                @endif
                            @else
                                {{-- if not typing --}}
                                <div class="list-group">
                                    <p class="mb-0 text-gray-600 text-sm font-bold">Recommended</p>
                                    @foreach ($this->restock_now_list as $item)
                                        <button class="list-group-item list-group-item-action"
                                                wire:key="{{ $item->id }}"
                                                wire:click="selectProduct({{ $item->id }})">
                                            <div class="flex gap-2">
                                                <p>{{ $item->id }}</p>
                                                <p>-</p>
                                                <p>{{ $item->title }}</p>
                                            </div>
                                        </button>
                                    @endforeach
                                    @foreach ($this->restock_soon_list as $item)
                                        <button class="list-group-item list-group-item-action"
                                                wire:key="{{ $item->id }}"
                                                wire:click="selectProduct({{ $item->id }})">
                                            <div class="flex gap-2">
                                                <p>{{ $item->id }}</p>
                                                <p>-</p>
                                                <p>{{ $item->title }}</p>
                                            </div>
                                        </button>
                                    @endforeach
                                    <p class="mb-0 mt-2 text-gray-600 text-sm font-bold">Other Products</p>
                                    @foreach ($this->all_products as $item)
                                        <button class="list-group-item list-group-item-action"
                                                wire:key="{{ $item->id }}"
                                                wire:click="selectProduct({{ $item->id }})">
                                            <div class="flex gap-2">
                                                <p>{{ $item->id }}</p>
                                                <p>-</p>
                                                <p>{{ $item->title }}</p>
                                            </div>
                                        </button>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div>
                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover"
                          data-bs-trigger="hover focus" data-bs-content="Save Chart to Image">
                        <button id="charttoimageexport" type="button" class="btn btn-sm btn-outline-primary">
                            <i class="bi bi-download"></i>
                        </button>
                    </span>
                </div>

            </div>
        </div>
        <p class="mb-1 text-gray-500 text-sm tracking-wider">
            @if ($monthSelect && $monthSelect != 0)
                Showing Data from the Month of {{ DateTime::createFromFormat('!m', $monthSelect)->format('F') }}
                , {{ now()->year }}
            @else
                Showing Data from {{ $userStartingDate ?? 'UNKNOWN' }}
                to {{ $userEndingDate ?? now()->format('Y-m-d') }}
            @endif
        </p>
        {{ $starting_date }}
        <div>
            <div class="block xl:flex gap-2">
                {{-- <div class="p-2 relative flex-1"> --}}
                {{--     <div class="inset-0"> --}}
                {{--         <div class="flex items-end w-full h-full overflow-hidden" wire:ignore> --}}
                {{--             <canvas class="w-full h-full" id="productSalesChart"></canvas> --}}
                {{--         </div> --}}
                {{--     </div> --}}
                {{-- </div> --}}
                <div class="flex-auto border border-gray-200">
                    <div class="p-2 h-full w-full relative flex justify-center items-center" wire:ignore>
                        <canvas class="!w-full !h-[350px]" id="productSalesChart"></canvas>
                        {{-- <div> --}}
                        {{--     <h5 class="text-gray-600 text-3xl tracking-wider">Awaiting User Input</h5> --}}
                        {{--     <h6 class="text-gray-500 text-xl text-center tracking-tighter">Select Product to View</h6> --}}
                        {{-- </div> --}}

                    </div>
                </div>
                {{-- <div class="p-2 "> --}}
                {{--     <div class="relative"> --}}
                {{--         <canvas class="!w-full !h-[350px]" id="productSalesChart"></canvas> --}}
                {{--     </div> --}}

                {{--      --}}{{-- <div class="relative "> --}}
                {{--      --}}{{--     <div class="inset-0"> --}}
                {{--      --}}{{--         <div class="flex items-end w-full h-full overflow-hidden" wire:ignore> --}}
                {{--      --}}{{--             <canvas class="h-full w-full" id="productSalesChart"></canvas> --}}
                {{--      --}}{{--         </div> --}}
                {{--      --}}{{--     </div> --}}
                {{--      --}}{{--      --}}{{--  --}}{{-- <canvas width="496" height="291" --}}
                {{--      --}}{{--      --}}{{--  --}}{{--     style="display: block; box-sizing: border-box; height: 300px; width: 100%;" --}}
                {{--      --}}{{--      --}}{{--  --}}{{--     id="shop-sales-chart"> --}}
                {{--      --}}{{--      --}}{{--  --}}{{-- </canvas>  --}}
                {{--      --}}{{-- </div> --}}
                {{-- </div> --}}
                <div class="pt-2 px-2">
                    <div>
                        <label for="selected_product"
                               class="form-label tracking-tight uppercase text-sm font-medium">Selected
                            Product</label>
                        <input type="text" placeholder="Selected Product" id="selected_product"
                               value="{{ $productselectedname ?? 'Awaiting User Input' }}"
                               class="form-control form-control-sm" disabled>
                    </div>

                    <div class="mt-2">
                        <label for="selected_product_price"
                               class="form-label tracking-tight uppercase text-sm font-medium">Price</label>
                        <input type="text" placeholder="Product Price" id="selected_product_price"
                               value="{{ $productselectedprice ?? 'Awaiting User Input' }}"
                               class="form-control form-control-sm" disabled>
                    </div>

                    <div class="mt-2">
                        <label for="predictrange"
                               class="form-label tracking-tight uppercase text-sm font-medium">Predict
                            for the next n days</label>

                        <select class="form-select form-select-sm" id="predictrange"
                                aria-label="Small select example" wire:model.live.debounce="predictrange">
                            <option>Select Range</option>
                            <option selected value="week">Week</option>
                            <option value="month">Month</option>
                            <option value="custom">Custom</option>
                        </select>
                    </div>

                    @if ($predictrange == 'custom')
                        <div class="mt-2">
                            <label for="customrange"
                                   class="form-label tracking-tight uppercase text-sm font-medium sr-only">custom
                                date</label>
                            <input type="number" placeholder="Number of days" id="customrange" name="customrange"
                                   wire:model.live.debounce="custompredictrange" max="365" min="1"
                                   class="form-control form-control-sm" aria-describedby="passwordHelpBlock">
                        </div>
                    @endif

                    <div class="mt-2">
                        <label for="predictinterval"
                               class="form-label tracking-tight uppercase text-sm font-medium">Dataset
                            Interval</label>

                        <select class="form-select form-select-sm" id="predictinterval"
                                aria-label="Small select example" wire:model.live.debounce="predictinterval">
                            <option>Select Interval</option>
                            <option selected value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                        </select>
                    </div>
                    <div class="grid grid-cols-2 mt-2">
                        <div class="p-2">
                            <button type="reset" class="w-full btn btn-sm btn-outline-danger"
                                    wire:click="reset_all">
                                Clear
                            </button>
                        </div>
                        <div class="p-2">
                            {{-- <button type="button" class="w-full btn btn-sm btn-outline-primary"
                                @disabled(!$productselectedid) wire:click="runforone">
                                <div class="flex gap-1 items-center justify-center">

                                    <div class="spinner-border spinner-border-sm" wire:loading wire:target="runforone"
                                        role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>

                                    <div>
                                        Run
                                    </div>

                                </div>

                            </button> --}}

                            <!-- Button trigger modal -->
                            <button type="button" class="w-full btn btn-sm btn-outline-primary"
                                    data-bs-toggle="modal" data-bs-target="#confirmRun" @disabled(!$productselectedid)>
                                <div class="flex gap-1 items-center justify-center">

                                    <div class="spinner-border spinner-border-sm" wire:loading wire:target="runforone"
                                         role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>

                                    <div>
                                        Run
                                    </div>

                                </div>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="confirmRun" data-bs-backdrop="static"
                                 data-bs-keyboard="false" tabindex="-1" aria-labelledby="confirmRunLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="confirmRunLabel">Please confirm details
                                            </h1>
                                            {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                                        </div>
                                        <div class="modal-body">
                                            <div>
                                                <label for="selected_product"
                                                       class="form-label tracking-tight uppercase text-sm font-medium">Selected
                                                    Product</label>
                                                <input type="text" placeholder="Selected Product"
                                                       id="selected_product"
                                                       value="{{ $productselectedname ?? 'Product' }}"
                                                       class="form-control form-control-sm" disabled>
                                            </div>

                                            <div class="grid grid-cols-2 gap-2">
                                                <div class="mt-2">
                                                    <label for="selected_product_price"
                                                           class="form-label tracking-tight uppercase text-sm font-medium">Price</label>
                                                    <input type="text" placeholder="Product Price"
                                                           id="selected_product_price"
                                                           value="{{ $productselectedprice ?? 'Price' }}"
                                                           class="form-control form-control-sm" disabled>
                                                </div>

                                                @if ($predictrange == 'custom')
                                                    <div class="mt-2">
                                                        <label for="selected_product_price"
                                                               class="form-label tracking-tight uppercase text-sm font-medium">Predict
                                                            for the next n days</label>
                                                        <input type="text" placeholder="Product Price"
                                                               id="selected_product_price"
                                                               value="{{ $custompredictrange ?? 'Next n Days' }}"
                                                               class="form-control form-control-sm" disabled>
                                                    </div>
                                                @else
                                                    <div class="mt-2">
                                                        <label for="selected_product_price"
                                                               class="form-label tracking-tight uppercase text-sm font-medium">Predict
                                                            for the next n days</label>
                                                        <input type="text" placeholder="Product Price"
                                                               id="selected_product_price"
                                                               value="{{ $predictrange ?? 'Next n Days' }}"
                                                               class="form-control form-control-sm" disabled>
                                                    </div>
                                                @endif

                                                <div class="mt-2">
                                                    <label for="selected_product_price"
                                                           class="form-label tracking-tight uppercase text-sm font-medium">Dataset
                                                        Interval</label>
                                                    <input type="text" placeholder="Product Price"
                                                           id="selected_product_price"
                                                           value="{{ $predictinterval ?? 'Dataset Interval' }}"
                                                           class="form-control form-control-sm" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark text-light"
                                                    data-bs-dismiss="modal">Back
                                            </button>
                                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal"
                                                    wire:click="runforone">Confirm
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="p-2">
                            {{-- <button type="button" class="w-full btn btn-sm btn-primary" @disabled(!$productselectedid) --}}
                            {{--     wire:click="runforall"> --}}
                            {{--     <div class="flex gap-1 items-center justify-center"> --}}
                            {{--         <div class="spinner-border spinner-border-sm" wire:loading wire:target="runforall" --}}
                            {{--             role="status"> --}}
                            {{--             <span class="visually-hidden">Loading...</span> --}}
                            {{--         </div> --}}
                            {{--         <div> --}}
                            {{--             Run on All Products --}}
                            {{--         </div> --}}

                            {{--     </div> --}}
                            {{-- </button> --}}
                        </div>
                    </div>

                </div>
            </div>

            <div>
                {{--                {{ var_dump($userArray) }} --}}
            </div>

            <div class="w-full mt-3 flex justify-between">
                <div class="flex gap-3">
                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary ">View Prediction Report</button> --}}
                    <div x-data="{ showModal: false }" @keydown.window.escape="showModal = false">
                        <div class="h-auto">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-outline-success"
                                    @click="showModal = !showModal" data-bs-target="#exampleModal">View Prediction
                                Report
                            </button>
                        </div>

                        <div x-cloak x-transition.opacity x-show="showModal" class="fixed inset-0 bg-black/50"></div>

                        <div x-cloak x-transition.duration.500ms x-show="showModal"
                             class="fixed inset-0 z-50 grid place-content-center">
                            <div @click.away="showModal = false"
                                 class="min-h-full rounded-xl min-w-[500px] bg-white items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Prediction Report</h1>
                                        </div>
                                        <div class="overflow-y-auto" style="max-height: 500px">
                                            <table class="table table-sm !bg-transparent">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Predicted volume</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @if ($prediction_report)
                                                    @foreach ($prediction_report as $key => $value)
                                                        <tr wire:key="{{ $key }}">
                                                            <td>{{ $value['date'] }}</td>
                                                            <td>{{ $value['predicted'] }}</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <div class="w-full flex gap-2 pt-3 justify-end">
                                    <button type="button" class="btn btn-outline-secondary"
                                            @click="showModal = false">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <button type="button" class="btn btn-sm btn-outline-secondary ">View Accuracy Report</button> --}}
                    <div x-data="{ showModal: false }" @keydown.window.escape="showModal = false">
                        <div class="h-auto">
                            <!-- Button trigger modal -->
                            <button type="button" @disabled($predict_done)
                            class="btn btn-sm btn-outline-secondary" @click="showModal = !showModal"
                                    data-bs-target="#exampleModal">View Accuracy Report
                            </button>
                        </div>

                        <div x-cloak x-transition.opacity x-show="showModal" class="fixed inset-0 bg-black/50"></div>

                        <div x-cloak x-transition.duration.500ms x-show="showModal"
                             class="fixed inset-0 z-50 grid place-content-center">
                            <div @click.away="showModal = false"
                                 class="min-h-full rounded-xl min-w-[500px] bg-white items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                Accuracy Report <span class="text-sm tracking-wide text-gray-600">Data
                                                    from past prediction vs actual</span>
                                            </h1>
                                        </div>
                                        <hr class="text-blue-500">
                                        <div class="flex flex-col items-center justify-center modal-body"
                                             x-transition.opacity>
                                            <div class="py-3">
                                                <div class="relative overflow-x-auto">
                                                    <table
                                                        class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                        <thead
                                                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                        <tr>
                                                            <th scope="col" class="px-6 py-3">
                                                                Metric Name
                                                            </th>
                                                            <th scope="col" class="px-6 py-3">
                                                                Metric Score
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        @if ($accuracy_report)
                                                            @foreach ($accuracy_report as $key => $value)
                                                                <tr
                                                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                                    <th scope="row"
                                                                        class="p-2 uppercase font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                        {{ $key }}
                                                                    </th>
                                                                    <td class="p-2">
                                                                        {{ $value }}
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @endif
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>

                                            <div class="py-3 flex flex-col justify-start text-start">
                                                <p class="text-sm mb-0.5"><span class="font-medium">MAE (Mean Absolute
                                                        Error )</span>
                                                    - tells us how many units we are away from the actual value (the
                                                    lower the value the better)</p>
                                                <p class="text-sm mb-0.5"><span class="font-medium">MSE (Mean Square
                                                        Error )</span>
                                                    - can be used to evaluate the model compared to other models</p>
                                                <p class="text-sm mb-0.5"><span class="font-medium">RMSE (Root Mean
                                                        Square Error)</span>
                                                    - more accurate version of MSE but in addition it squares the mean
                                                    obtained.</p>
                                                <p class="text-sm mb-0.5"><span class="font-medium">MAPE (Mean
                                                        Absolute Percetag Error )</span>
                                                    - tells us the number of percent of errors (acceptable is 20%).</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full flex gap-2 pt-3 justify-end">
                                    <button type="button" class="btn btn-outline-secondary"
                                            @click="showModal = false">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ showModal: false }" @keydown.window.escape="showModal = false">
                        <div class="h-auto">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-outline-primary"
                                    @click="showModal = !showModal" data-bs-target="#exampleModal">View History in Table
                            </button>
                        </div>

                        <div x-cloak x-transition.opacity x-show="showModal" class="fixed inset-0 bg-black/50"></div>

                        <div x-cloak x-transition.duration.500ms x-show="showModal"
                             class="fixed inset-0 z-50 grid place-content-center">
                            <div @click.away="showModal = false"
                                 class="min-h-full rounded-xl min-w-[500px] bg-white items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title font-light fs-5" id="exampleModalLabel">Table View
                                                of
                                                Prodct : <span class="font-bold">{{ $productselectedid }}</span></h1>
                                        </div>
                                        <div class="overflow-y-auto" style="max-height: 500px">
                                            <table class="table table-sm !bg-transparent">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Quantity Sold</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($chartArray as $key => $value)
                                                    <tr>
                                                        <th scope="row" class="text-sm">{{ $key }}
                                                        </th>
                                                        <td>{{ $value }}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <div class="w-full flex gap-2 pt-3 justify-end">
                                    <button type="button" class="btn btn-outline-secondary"
                                            @click="showModal = false">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div x-data="{ showModal: false }" @keydown.window.escape="showModal = false">
                        <div class="h-auto">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-outline-primary"
                                    @click="showModal = !showModal" data-bs-target="#exampleModal">Forecast
                                Considerations
                            </button>
                        </div>

                        <div x-cloak x-transition.opacity x-show="showModal" class="fixed inset-0 bg-black/50"></div>

                        <div x-cloak x-transition.duration.500ms x-show="showModal"
                             class="fixed inset-0 z-50 grid place-content-center">
                            <div @click.away="showModal = false"
                                 class="min-h-full rounded-xl min-w-[800px] bg-white items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Forecast
                                                Considerations
                                                Info</h1>
                                        </div>
                                        <div class="flex flex-col justify-start overflow-y-auto"
                                             style="max-height: 500px">
                                            <p class="my-2 font-bold text-gray-600">Here are some key factors to
                                                consider
                                                alongside
                                                our prediction:</p>
                                            <div>
                                                <ul class="text-start list-disc pl-4">
                                                    <li class="text-gray-800 font-bold text-sm">**Demand
                                                        Fluctuations:**
                                                    </li>
                                                    <ul class="pl-4 text-gray-600 text-sm">
                                                        <li class="mt-2">**Seasonality:** Consider predictable
                                                            changes
                                                            in demand due
                                                            to seasons, holidays, or trends. (e.g., higher sunscreen
                                                            sales in summer)
                                                        </li>
                                                        <li class="mt-2">**Promotions and Marketing Efforts:**
                                                            Account
                                                            for potential spikes in demand due to planned promotions or
                                                            marketing campaigns.
                                                        </li>
                                                        <li class="mt-2">**External Factors:** Be aware of external
                                                            events that could impact demand, like economic changes,
                                                            competitor actions, or unexpected weather events.
                                                        </li>
                                                    </ul>
                                                    <li class="mt-4 text-gray-800 font-bold text-sm">**Product Life
                                                        Cycle:**
                                                    </li>
                                                    <ul class="pl-4 text-gray-600 text-sm">
                                                        <li class="mt-2">**New Products:** Forecast for new products
                                                            can
                                                            be more
                                                            uncertain. Consider market research and competitor analysis.
                                                        </li>
                                                        <li class="mt-2">**Maturing Products:** Demand may stabilize
                                                            or
                                                            decline for established products. Plan for potential
                                                            adjustments.
                                                        </li>
                                                        <li class="mt-2">**End-of-Life Products:** Factor in
                                                            phase-out
                                                            periods and potential clearance sales before demand fully
                                                            ceases.
                                                        </li>
                                                    </ul>
                                                    <li class="mt-4 text-gray-800 font-bold text-sm">**Accuracy and
                                                        Error
                                                        Ranges:**
                                                    </li>
                                                    <ul class="pl-4 text-gray-600 text-sm">
                                                        <li class="mt-2">**Historical Data Quality:** The accuracy of
                                                            your forecast
                                                            relies on the quality of past data. Identify and address any
                                                            inconsistencies.
                                                        </li>
                                                        <li class="mt-2">**Safety Stock:** Maintain a buffer of
                                                            inventory to account for unexpected demand fluctuations or
                                                            forecast errors.
                                                        </li>
                                                        <li class="mt-2">**Forecast Review and Updates:** Regularly
                                                            monitor and update your forecasts to reflect changing
                                                            conditions.
                                                        </li>
                                                    </ul>
                                                    <li class="mt-4 text-gray-800 font-bold  text-sm">**External Data
                                                        Integration:**
                                                    </li>
                                                    <ul class="pl-4 text-gray-600 text-sm">
                                                        <li class="mt-2">**Market Trends:** Consider broader market
                                                            data
                                                            to identify
                                                            potential changes in customer preferences or industry
                                                            shifts.
                                                        </li>
                                                        <li class="mt-2">**Supplier Lead Times:** Integrate real-time
                                                            supplier lead time information into your forecasts for
                                                            better inventory management.
                                                        </li>
                                                        <li class="mt-2">**Economic Indicators:** Factor in economic
                                                            forecasts that could impact consumer spending and overall
                                                            demand.
                                                        </li>
                                                    </ul>
                                                </ul>
                                                <p>These are just some additional considerations. The specific factors
                                                    you need to focus on will depend on your industry, business model,
                                                    and the products you sell.</p>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="w-full flex gap-2 pt-3 justify-end">
                                    <button type="button" class="btn btn-outline-secondary"
                                            @click="showModal = false">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="mt-3 p-3 border border-gray-200 bg-white rounded-lg">
        <div class="flex justify-between">
            <h5>Prediction for the next N days</h5>
        </div>
        <div class="pt-2">
            <div class="relative pt-2">
                <div class="h-full w-full relative flex justify-center items-center" wire:ignore>
                    <canvas class="!w-full !h-[300px]" id="predictionChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-3 p-3 border border-gray-200 bg-white rounded-lg">
        <div class="flex justify-between">
            <h5>Accuracy vs Predicted Comparison</h5>

        </div>
        <div class="relative pt-2">
            <div class="h-full w-full relative flex justify-center items-center" wire:ignore>
                <canvas class="!w-full !h-[300px]" id="predictionComparisonChart"></canvas>
            </div>
        </div>
    </div>

    <div wire:init="forecastresult">
    </div>
</div>

<script>
    // Adding an event listener to the button
    document.getElementById("charttoimageexport").addEventListener("click", handleClick);

    let ctx = document.getElementById('productSalesChart');

    function handleClick() {

        ctx.style.backgroundColor = 'white';

        let img = ctx.toDataURL("image/png").replace("image/png", "image/octet-stream");

        let aDownloadLink = document.createElement('a');

        // Add the name of the file to the link
        aDownloadLink.download = 'canvas_image.png';
        // Attach the data to the link
        aDownloadLink.href = img;
        // Get the code to click the download link
        aDownloadLink.click();

    }
</script>

@script
<script>

    Livewire.on('reload-iframe', () => {

        var timestamp = new Date().getTime();

        let link = $wire.pdfpath;

        console.log('reload iframe');
        var iframe = document.getElementById("myPdfIframe");
        iframe.src = $wire.pdfpath + "?t=" + timestamp;
        console.log(link)
        var doc = iframe.contentDocument || iframe.contentWindow;
        doc.location.reload(true);
        iframe.src = $wire.pdfpath + "?t=" + timestamp;

    });

    let ctx = document.getElementById('productSalesChart');

    let ctx_prediction = document.getElementById('predictionChart');

    let ctx_comparison = document.getElementById('predictionComparisonChart');

    let data = [];

    let keysArray = Object.keys(data);

    let valuesArray = Object.values(data);

    let predictchart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [],
            datasets: [{
                label: 'Sold Quantity',
                borderColor: '#009aff',
                data: [],
                // backgroundColor: '#bae0ff',
                // pointStyle: 'circle',
                pointRadius: 6,
                pointHoverRadius: 8,
                tension: 0.2,
                fill: false,
            }],

        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
            },
        }
    });

    let predicted_labels_prediction = []

    let predicted_value_prediction = []

    let predictionChart = new Chart(ctx_prediction, {
        type: "line",
        data: {
            labels: [],
            datasets: [{
                label: 'Prediction Value',
                borderColor: '#bae0ff',
                data: [],
                pointRadius: 6,
                pointHoverRadius: 8,
                tension: 0.2,
                fill: false,
            }],

        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
            },
        }
    });

    let comparison_labels = []

    let actual_value = []

    let predicted_value = []

    let predictionComparisonChart = new Chart(ctx_comparison, {
        type: "line",
        data: {
            labels: [],
            datasets: [{
                label: 'Actual Value',
                borderColor: '#aa00ff',
                data: [],
                pointRadius: 6,
                pointHoverRadius: 8,
                tension: 0.2,
                fill: false,
            }, {
                label: 'Predicted Value',
                borderColor: '#ffff00',
                data: [],
                pointRadius: 6,
                pointHoverRadius: 8,
                tension: 0.2,
                fill: false,
            }],

        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                },
            },
        }
    });

    Livewire.on('update-chart', () => {
        console.log('Updating Chart');

        data = $wire.chartArray;

        keysArray = Object.keys(data);
        valuesArray = Object.values(data);

        predictchart.data.labels = keysArray;

        predictchart.data.datasets[0].data = valuesArray;

        predictchart.update();

        console.log(keysArray, valuesArray);
    });

    Livewire.on('update-chart-prediction', () => {
        console.log('Updating Prediction Chart');

        let accuracy_report = $wire.sales_accuracy_apiresponse || [];

        let prediction_report = $wire.prediction_report || [];

        // accuracy_report_labels = Object.keys(accuracy_report);
        let accuracy_report_values = Object.values(accuracy_report);

        // prediction_report_labels = Object.keys(prediction_report);
        let prediction_report_values = Object.values(prediction_report);

        predicted_labels_prediction = prediction_report_values.map((item) => item.date);

        predicted_value_prediction = prediction_report_values.map((item) => item.predicted);

        console.log(predicted_labels_prediction, predicted_value_prediction);

        predictionChart.data.labels = predicted_labels_prediction;

        predictionChart.data.datasets[0].data = predicted_value_prediction;

        predictionChart.update();


        comparison_labels = accuracy_report_values.map((item) => item.date);
        actual_value = accuracy_report_values.map((item) => item.actual);
        predicted_value = accuracy_report_values.map((item) => item.predicted);

        predictionComparisonChart.data.labels = comparison_labels;

        predictionComparisonChart.data.datasets[0].data = actual_value;

        predictionComparisonChart.data.datasets[1].data = predicted_value;

        console.log(comparison_labels, actual_value, predicted_value);

        predictionComparisonChart.update();

    });
</script>
@endscript
