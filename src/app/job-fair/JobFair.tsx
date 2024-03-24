import AllHomeHeroComponent from "../../components/AllHomeHeroComponent";

export default function JobFair() {
    return (
        <div>

            <AllHomeHeroComponent >
                <p className='text-5xl font-bold mt-3 text-center leading-tight'>
                    Job Fair
                </p>
            </AllHomeHeroComponent >

            <div className="md:px-20 lg:px-40 mx-5">

                <div className="flex justify-between items-center gap-20 flex-col md:flex-row py-20">
                    <div className=" md:w-2/3">
                        <p className="text-5xl font-semibold text-blue-950 mb-7">About Job Fair</p>
                        <p className="text-stone-700 text-lg">
                            <span className="font-semibold">PRATIBHA JOB FAIR </span>
                            is an initiative to provide a platform to students and employers to come together under one roof. Pratibha Group is pioneer to start JOB FAIR in the Pimpri Chinchwad Municipal Corporation area in 2009. PCMC is an industrial hub. Pratibha Job Fair acts as a bridge to connect the companies and students, where students get an opportunity to get job and can understand the skill set required to get a desired job. Even employers get a chance to approach fresh talent. This is a mega platform for jobseekers, recruiters and our students to achieve their goals.
                            <br />
                            Objectives:-
                            <br />
                            -To provide a common platform for students across Maharashtra to find suitable jobs and for employers to select deserving candidates for their job profile.
                            <br />
                            -To provide an opportunity to students, teachers and administrators to implement mega events.
                            <br />
                            -To inculcate managerial skills among students.
                        </p>
                    </div>

                    <div className="flex justify-center items-center">
                        <img src="/job fair/jobfair.jpg" alt="" className="h-96 w-96 object-cover" />
                    </div>
                </div>


                <div className="mb-10">
                    <p className="text-5xl font-semibold text-blue-950 mb-7 text-center md:text-left">Analysis - Job Fair</p>
                    <br />
                    <br />
                    <br />
                    <div className="flex justify-center md:justify-start items-center flex-wrap gap-10 md:gap-14">
                        <div className="flex flex-col gap-5 items-center border-2 border-slate-300 rounded-md p-2">
                            <img className="h-72 w-72"
                                src="/job fair/analysis 1.png" alt="" />
                            <p className="text-2xl">Companies Participated</p>
                        </div>
                        <div className="flex flex-col gap-5 items-center border-2 border-slate-300 rounded-md p-2">
                            <img className="h-72 w-72"
                                src="/job fair/analysis 1.png" alt="" />
                            <p className="text-2xl">Companies Participated</p>
                        </div>
                        <div className="flex flex-col gap-5 items-center border-2 border-slate-300 rounded-md p-2">
                            <img className="h-72 w-72"
                                src="/job fair/analysis 1.png" alt="" />
                            <p className="text-2xl">Companies Participated</p>
                        </div>
                        <div className="flex flex-col gap-5 items-center border-2 border-slate-300 rounded-md p-2">
                            <img className="h-72 w-72"
                                src="/job fair/analysis 1.png" alt="" />
                            <p className="text-2xl">Companies Participated</p>
                        </div>
                    </div>
                </div>

                <div className="">
                    <p className="text-5xl font-semibold text-center md:text-left text-blue-950 mb-7">Report Of Job </p>

                    <div className="flex gap-10 justify-center md:justify-start">

                        <div className="flex flex-col gap-5 items-center border-2 border-slate-300 rounded-md p-2 w-fit">
                            <img className="h-40 w-52" src="/pdf-icon.jpg" alt="" />
                            <p className="text-2xl">Report 2017</p>
                        </div>

                        <div className="flex flex-col gap-5 items-center border-2 border-slate-300 rounded-md p-2 w-fit">
                            <img className="h-40 w-52" src="/pdf-icon.jpg" alt="" />
                            <p className="text-2xl">Report 2017</p>
                        </div>
                    </div>

                </div>

                <br />
                <br />
                <br />
            </div>
        </div>
    )
}
