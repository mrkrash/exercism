pub struct Clock;

impl Clock {
    pub fn new(hours: i32, minutes: i32) -> Self {
        let _minutes = minutes % 60;
        let _hours = hours + _minutes / 60;
        _hours = _hours % 24

    }

    pub fn add_minutes(&self, minutes: i32) -> Self {
        todo!("Add {minutes} minutes to existing Clock time");
    }
}
