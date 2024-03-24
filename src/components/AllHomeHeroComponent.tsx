import { ReactNode } from 'react'

export default function AllHomeHeroComponent({ children }: { children: ReactNode }) {
    return (
        <div className='bg-[url(/hero.webp)] h-80 bg-center bg-cover flex flex-col justify-center items-center text-white mt-[4.5rem]'>
            {children}
        </div>
    )
}
