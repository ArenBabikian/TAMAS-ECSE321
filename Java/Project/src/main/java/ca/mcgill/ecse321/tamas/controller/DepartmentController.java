package ca.mcgill.ecse321.tamas.controller;

import ca.mcgill.ecse321.tamas.model.Course;
import ca.mcgill.ecse321.tamas.model.Department;
import ca.mcgill.ecse321.tamas.model.Instructor;
import ca.mcgill.ecse321.tamas.model.Job;
import ca.mcgill.ecse321.tamas.model.PositionType;
import ca.mcgill.ecse321.tamas.model.Student;
import ca.mcgill.ecse321.tamas.persistence.PersistenceXStream;

public class DepartmentController {

	private Department department;

	public DepartmentController(Department department){

		this.department = department;

	}


	public void createCourse(String code, String name, String semester, int numberOfCredits, int numberOfLabs, int numberOfTutorials, int numberOfHours, int studentsEnrolled, int tasNeeded, int gradersNeeded, int taHourlyRate, int graderHourlyRate, int budget){

		Course course = new Course(code, name, semester, numberOfCredits, numberOfLabs, numberOfTutorials, numberOfHours, studentsEnrolled, tasNeeded, gradersNeeded, taHourlyRate, graderHourlyRate, budget);
		department.addAllCourse(course);
		PersistenceXStream.saveToXMLwithXStream(department);


	}

	/**
	 * @param posType
	 * @param course
	 *
	 */
	public void createJob(PositionType posType, Course course){

		Job job = new Job(posType, course);
		department.addAllJob(job);
		PersistenceXStream.saveToXMLwithXStream(department);

	}

	/**
	 * @param job
	 * @param student
	 */
	public void createAllocation(Job job, Student student){

		////HAVE TO COMPLETE\\\\
		PersistenceXStream.saveToXMLwithXStream(department);

	}

	/**
	 * @param job
	 * @param student
	 */
	public void removeAllocation(Job job, Student student){
		PersistenceXStream.saveToXMLwithXStream(department);

	}

	/**
	 * @param job
	 * @param student
	 */
	public void createJobOffer(Job job, Student student){
		PersistenceXStream.saveToXMLwithXStream(department);
	}

	

}