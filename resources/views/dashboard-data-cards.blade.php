                @can('read notice')
                    <x-info-box title="{{$notices}}" text="Notices" icon="fas fa-bell text-dark" theme="yellow" url="{{route('notices.index')}}" url-text="View notices" colour="bg-[#e2d000]"  text-colour="text-white"/>
                @endcan 