
import AllHomeHeroComponent from '../components/AllHomeHeroComponent'
import HomeCompanies from '../components/HomeCompanies'

export default function Home() {
    return (
        <div>

            <AllHomeHeroComponent >
                <p className='text-2xl font-semibold'>
                    Placements at PCCCS
                </p>
                <p className='text-5xl font-bold mt-3 text-center leading-tight'>
                    Unlocking Your Future<br />
                    Where Careers Take Flight!
                </p>
            </AllHomeHeroComponent >

            {/* -------------------------------------------------------------------------------- */}

            <div className="flex flex-col md:flex-row gap-10 py-20 md:px-10 lg:px-20">
                <div className="px-20 py-28 w-2/3">
                    <p className='text-blue-950 font-semibold text-5xl'>Pathways to Success </p>
                    <p className='text-lg text-stone-700 mt-5 leading-relaxed text-wrap'>
                        Placement is the culmination of a journey undertaken by our students. We feel its our priority to make sure our students achieve what they set out for. Around the year special attention is given to make sure our students excel in placement process. Pre-placement talks, CV writing workshops, Mock GD-PI sessions & spoken English lectures are organized to make our students ready for the gruelling placement process.
                    </p>
                </div>
                <div className="flex justify-center items-center">
                    <img src="/home/home1.webp" alt="" className='h-80 md:h-[28rem] w-80 md:w-[44rem]' />
                </div>
            </div>

            {/* -------------------------------------------------------------------------------- */}


            {/* -------------------------------------------------------------------------------- */}


            <div className="px-32 py-20 bg-stone-100">
                <p className='text-5xl font-bold text-blue-950'>Department Placement Co-Ordinators </p>

                {/* <div className="flex gap-20 justify-start items-center flex-wrap mt-10"> */}
                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20 mt-20">

                    <div className="">
                        <p className='text-2xl font-semibold'>Prof. Harshita Vachhani </p>
                        <p className='text-slate-700'>Training and Placement Officer
                            Program Co-ordinator (Comp.Sci.) </p>
                        <a className='text-blue-900 font-semibold mt-1 block' href='#'>harshitavachhani@pratibhagroup.org.in</a>
                    </div>

                    <div className="">
                        <p className='text-2xl font-semibold'>Prof. Hanumant Koli </p>
                        <p className='text-slate-700'>Program Co-ordinator (BBA -IB)</p>
                        <a className='text-blue-900 font-semibold mt-1 block' href='#'>hanumanta.pibm@pratibhagroup.org.in</a>
                    </div>

                    <div className="">
                        <p className='text-2xl font-semibold'>Prof. Dinesh Lahori </p>
                        <p className='text-slate-700'>Assistant Professor </p>
                        <a className='text-blue-900 font-semibold mt-1 block' href='#'>dineshlahori@pratibhagroup.org.in</a>
                    </div>

                    <div className="">
                        <p className='text-2xl font-semibold'>Prof. Anuradha Godke </p>
                        <p className='text-slate-700'>Prof. Anuradha Godke </p>
                        <a className='text-blue-900 font-semibold mt-1 block' href='#'>anuradhaghodke@pratibhagroup.org.in</a>
                    </div>

                    <div className="">
                        <p className='text-2xl font-semibold'>Prof. Poonam Bora </p>
                        <p className='text-slate-700'>Assistant Professor </p>
                        <a className='text-blue-900 font-semibold mt-1 block' href='#'>poonamkankariya@pratibhagroup.org.in</a>
                    </div>

                </div>

            </div>

            {/* -------------------------------------------------------------------------------- */}

            <HomeCompanies />

        </div>
    )
}
