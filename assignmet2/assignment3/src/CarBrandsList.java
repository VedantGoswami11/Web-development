
/**
 * 
 * <pre>
 * Student name: Vedant Goswami
 * </pre>
 * 
 * <pre>
 *  Student number : 41061553
 * </pre>

 * <pre>
 * Class: CST8284
 * </pre>
 * 
 * <pre>
 * Professor: Fedor Ilitchev
 * </pre>
 * 
 * @author Vedant Goswami
 * @version 11.0.15
 */

import java.util.*;

public class CarBrandsList {

	public static void main(String[] args) {

		// Creating llinkd list Object
		LinkedList<String> list1 = new LinkedList<>();
		LinkedList<String> list2 = new LinkedList<>();
		// making the rides as an array that is string.
		String[] rides = { "cardillac", "toyota", "suzuki", "chevrolet", "hyundai", "mercedies", "keke" };
		String[] rides2 = { "volvo", "subaru", "volkswagen", "nissan", "cardillac", "toyota", "honda" };
		System.out.print("List is: \n");
		for (int i = 0; i < rides.length; i++) {
			list1.addLast(rides[i]);
			list2.addLast(rides2[i]);
		}

		// ading list 1 to 2
		list1.addAll(list2);

		// printing list 1

		printList(list1);

		// Displaying names of car brands in uppercase letters using toUpper method
		System.out.print("\n");
		System.out.printf("%nDisplaying names of car brands in uppercase letters...\n");

		toUpperCase(list1);

		// Deleting car brands 5 to 7... using deleteSublist command
		System.out.print("List is: \n");
		System.out.printf("%nDeleting car brands 5 to 7... \n");
		deleteSublist(list1);
		System.out.print("\n");

		// printing the modified version of list1
		System.out.printf("%nHere is the current list of car brands...\nList is...\n");
		printList(list1);
		System.out.print("\n");

		// printing list in reverse order using reversed method created below
		System.out.printf("%nReversed List:\n");
		printReversedList(list1);

		// sorting cars in alphabetical oeder using sortList() method.
		System.out.print("\n");
		System.out.printf("%nSorted car brands in alphabetical order...\nList is...\\n");

		sortList(list1);
		System.out.print("\n");

		// removing duplicate car brand name
		System.out.printf("%nRemoving duplicate car brands...\nNon-duplicates are:");
		removeDuplicate(list1);
		ListIterator iterator = list1.listIterator();
		while (iterator.hasNext()) {
			System.out.printf("%s ", iterator.next());
		}

	}

	// HINT: MORE TO DO: Insert all your methods in this section which includes:

	// output List contents
	public static void printList(LinkedList<String> list1) {
		ListIterator iterator = list1.listIterator();
		while (iterator.hasNext()) {
			System.out.printf("%s ", iterator.next());
		}
	}

	// locate String objects and convert to uppercase
	public static void toUpperCase(LinkedList<String> list1) {

		list1.replaceAll(String::toUpperCase);
		ListIterator iterator = list1.listIterator();
		while (iterator.hasNext()) {
			System.out.printf("%s ", iterator.next());
		}

	}

	// locate String objects and eliminate duplicates
	public static void removeDuplicate(LinkedList<String> list1) {

		for (int v  = 0; v < list1.size(); v++) {
			for (int e = 0; e < list1.size(); e++) {
				if (list1.get(v).equals(list1.get(e)) && v != e) {
					list1.remove(e);
					v = 0;
					e = 0;
				}
			}
		}

	}

	// obtain sublist and use clear method to delete sublist items
	public static void deleteSublist(LinkedList<String> list1) {
		list1.subList(5, 8).clear();
		ListIterator iterator = list1.listIterator();
		for (int i = 0; i < list1.size(); i++) {
			System.out.printf("%s ", list1.get(i));
		}
	}

	// print the list in reverse order
	public static void printReversedList(LinkedList<String> list1) {
		Collections.reverse(list1);
		for (int i = 0; i < list1.size(); i++) {
			System.out.printf("%s ", list1.get(i));
		}
	}
// used to short the list in alphabetically.
	public static void sortList(LinkedList<String> list1) {
		Collections.sort(list1);
		for (int i = 0; i < list1.size(); i++) {
			System.out.printf("%s ", list1.get(i));
		}
	}
}
