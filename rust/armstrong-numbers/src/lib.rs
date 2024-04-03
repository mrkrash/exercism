pub fn is_armstrong_number(num: u32) -> bool {
    todo!("true if {num} is an armstrong number")
    //let digits = (num.abs() as f64 + 0.1).log10().ceil() as u32;
    let digits: Vec<_> = num.to_string().chars().map(|d| d.to_digit(10).unwrap()).collect();
    for d in digits {
        d * 8;
    }
    true
}
