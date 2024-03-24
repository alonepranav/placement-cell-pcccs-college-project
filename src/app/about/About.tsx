export default function About() {
    return (
        <div className="">
            <br />
            <br />

            <div className="p-10">
                <div className="mt-2">
                    <p className="text-5xl text-blue-950 font-bold">About Us</p>
                    <br />
                </div>
                <img src="/p.avif" className="h-[34rem] object-cover w-full" alt="" />
            </div>

            <div className="flex justify-center items-center gap-20 bg-stone-100 pt-32">
                <div className="w-1/2">
                    <p className="text-5xl font-bold text-blue-950">
                        Kamala Education Society was
                        <br />
                        established in the year 1992.
                    </p>
                    <p className="text-slate-800 text-lg mb-4 mt-5">
                        In the year 2000, Dr. Deepak Shah, a renowned activist, social worker, and educator, assumed leadership of the trust, injecting a dynamic impetus to propel the noble cause of the organization forward. Alongside him, Mrs. Pratibha Shah, an esteemed social activist, has actively engaged in fostering the growth of the trust on multiple fronts.
                    </p>
                    <p className="text-slate-800 text-lg mb-4">
                        Their shared dedication and focused approach to education have resulted in the Kamala Education Society experiencing overall expansion and progress. Through their tireless efforts, the trust continues to make a profound impact in the lives of individuals, empowering them through quality education and advancing the society as a whole.
                    </p>
                </div>
                <div className="">
                    <video src="/about.webm" className="h-80" autoPlay loop></video>
                </div>
            </div>

            <div className="px-10 bg-stone-100 py-20">
                <p className="text-5xl font-bold text-blue-950">
                    Our Offerings
                </p>
                <br />
                <div className="">
                    <br />
                    <div className="flex gap-60 text-lg items-center ml-10">
                        <ul className="list-disc">
                            <li>Graduate Programs</li>
                            <li>Undergraduate Programs</li>
                            <li>Doctoral Degrees</li>
                        </ul>
                        <ul className="list-disc">
                            <li>International Hubs</li>
                            <li>Alumni & Giving</li>
                            <li>Global Students</li>
                        </ul>
                    </div>
                </div>
                <br />
                <br />
            </div>

        </div>
    )
}
