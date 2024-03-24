
export default function StudentApplication() {
    return (
        <div>
            <div className='py-10 px-20'>

                <div className="text-3xl font-semibold tracking-wider">
                    <p>Admin</p>
                </div>

                <div className="mt-10 flex gap-5">
                    <a href='/admin' className='px-6 py-1.5 bg-blue-600 rounded-md text-white font-semibold'>Admin</a>
                    <a href='' className='px-6 py-1.5 bg-amber-500 rounded-md text-white font-semibold'>Refresh</a>
                </div>

                <div className="mt-10">

                    <table className="w-full   even:bg-black border-2 border-slate-300">
                        <thead>
                            <tr>
                                <th className="text-left p-3.5">S.No</th>
                                <th className="text-left p-3.5">Name</th>
                                <th className="text-left p-3.5">Email</th>
                                <th className="text-left p-3.5">Class</th>
                                <th className="text-left p-3.5">Company Name</th>
                                <th className="text-left p-3.5">Position</th>
                                <th className="text-left p-3.5">Drive Date</th>
                            </tr>
                        </thead>
                        <tbody>

                            {
                                [1, 2, 3, 4, 5, 6, 7, 8, 9].map((_, i) => {
                                    return <tr key={i} className="even:bg-slate-50 odd:bg-slate-200">
                                        <td className="p-3.5">
                                            <p className="text-lg ">{i + 1}</p>
                                        </td>
                                        <td className="p-3.5">
                                            <p className="text-lg ">Danny Wadje</p>
                                        </td>
                                        <td className="p-3.5">
                                            <p className="text-lg ">dnyaneshwarwadje88@gmail.com</p>
                                        </td>
                                        <td className="p-3.5">
                                            <p className="text-lg ">TY BSC (CS)</p>
                                        </td>
                                        <td className="p-3.5">
                                            <p className="text-lg ">Amazon</p>
                                        </td>
                                        <td className="p-3.5">
                                            <p className="text-lg ">Backend Developer</p>
                                        </td>
                                        <td className="p-3.5">
                                            <p className="text-lg ">2/3/4</p>
                                        </td>
                                    </tr>

                                })
                            }
                        </tbody>
                    </table>


                </div>
            </div>

            {/* <p className='text-3xl font-semibold'>No cars present</p> */}

        </div>
    )
}
