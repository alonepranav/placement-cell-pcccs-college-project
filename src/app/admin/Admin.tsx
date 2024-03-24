
export default function Admin() {
    return (
        <div>
            <div className='py-10 px-20'>

                <div className="text-3xl font-semibold tracking-wider">
                    <p>Admin</p>
                </div>

                <div className="mt-10 flex gap-5">
                    <a href='/add-companies' className='px-6 py-1.5 bg-blue-600 rounded-md text-white font-semibold'>Add Companies</a>
                    <a href='/student-application' className='px-6 py-1.5 bg-emerald-500 rounded-md text-white font-semibold'>Student Application</a>
                    <button id="logout" className='px-6 py-1.5 bg-red-500 rounded-md text-white font-semibold'>Log Out</button>
                </div>

                <div className="mt-10 flex flex-col gap-6">

                    {
                        [1, 2, 3, 4, 5, 6, 7, 8, 9].map((_, i) => {
                            return <div key={i} className="border border-slate-700 rounded-md w-full p-3 py-5 items-center">
                                <div className="">
                                    <p className="text-3xl font-semibold">Infosys</p>
                                    <p className="mt-1">Drive Date :  7/12/2024</p>
                                </div>
                                <div className="text-2xl mt-4">
                                    <p className="text-stone-500">Open Position : {" "}
                                        <span className="font-semibold text-black">
                                            Android Developer
                                        </span>
                                    </p>
                                </div>
                                <div className="mt-6">
                                    <button className="text-white font-semibold px-5 py-1.5 bg-rose-600 rounded-md">Delete Company</button>
                                </div>
                            </div>

                        })
                    }

                </div>
            </div>

            {/* <p className='text-3xl font-semibold'>No cars present</p> */}

        </div>
    )
}
