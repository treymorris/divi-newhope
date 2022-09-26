export default function SortIcon({className = '', ...rest}) {
    return (
        <svg className={className} role='img' viewBox="0 0 9 11" fill="none" xmlns="http://www.w3.org/2000/svg" {...rest}>
            <path d="M1.80573 5.9375C1.24713 5.9375 0.967834 6.59766 1.37408 6.97852L4.39557 10C4.62408 10.2539 5.00494 10.2539 5.25885 10L8.28033 6.97852C8.66119 6.59766 8.3819 5.9375 7.84869 5.9375H1.80573ZM8.28033 3.27148L5.25885 0.25C5.00494 0.0214844 4.62408 0.0214844 4.39557 0.25L1.37408 3.27148C0.967834 3.67773 1.24713 4.3125 1.80573 4.3125H7.84869C8.3819 4.3125 8.66119 3.67773 8.28033 3.27148Z" fill="#333333"/>
        </svg>
    );
}
