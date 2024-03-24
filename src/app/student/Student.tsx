import AllHomeHeroComponent from "../../components/AllHomeHeroComponent";

export default function Student() {
    return (
        <div>

            <AllHomeHeroComponent >
                <p className='text-5xl font-bold mt-3 text-center leading-tight'>
                    <span className="text-2xl font-normal">
                        Welcome
                        <br />
                    </span>
                    Danny Wadje
                </p>
            </AllHomeHeroComponent >

            <div className="py-20">

                <div className="text-center">
                    <p className="text-4xl text-blue-950 font-semibold">Upcoming Comapnies</p>
                </div>
                <br />
                <br />
                <br />
                <div className="flex flex-col gap-5 px-20">

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
                                    <button className="text-white font-semibold px-7 py-2 bg-blue-600 rounded-md">Apply Now</button>
                                </div>
                            </div>

                        })
                    }
                </div>
            </div>

        </div>
    )
}
